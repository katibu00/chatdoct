<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Prescription;
use App\Models\User;
use Barryvdh\DomPDF\Facade as PDF;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function DoctorsIndex()
    {
        $data['users'] = User::where('role', 'doctor')->where('status', 1)->get();
        return view('patient.doctors', $data);
    }

    public function DoctorsDetails($number)
    {

        // if (Auth::guest()) {

        //     return view('auth.login', compact('number'));
        // }

        $hour = date("H");
        $time = '';
        // $timezone = date("e");
        if ($hour >= "6" && $hour < "12") {
            $time = "Morning";
        } else
        if ($hour >= "12" && $hour < "18") {
            $time = "Afternoon";
        } else
        if ($hour >= "18" && $hour < "24") {
            $time = "Evening";
        } else
        if ($hour >= "1" && $time < "6") {
            $time = "Night";
        }

        $day = strtolower(date('l')) . 's';

        $data['user'] = User::where('number', $number)->first();
        $schedules = explode(',', $data['user']->$day);

        $data['availability'] = '';

        if (in_array($time, $schedules)) {
            $data['availability'] = 'yes';
        } else {
            $data['availability'] = 'no';
        }
        // dd($time);
        return view('patient.details', $data);
    }

    public function BookDoctor(Request $request)
    {
        // dd($request->all());
        $id = Auth::user()->id;
        $balance = Auth::user()->balance;
        $doctor = User::findorFail($request->doctor_id);
        $chat = $doctor->chat_rate;
        $video = $doctor->video_rate;

        $day = strtolower(date('l')) . 's';
        $doctor = User::where('id', $request->doctor_id)->first();
        $schedules = explode(',', $doctor->$day);

        if (!in_array($request->time_slot, $schedules)) {
            Toastr::error('Doctor Unavailable at that time slot. Please choose another time slot and try again', 'Doctor Not Available');
            return redirect()->back();
        }

        if ($request->book_type == 'chat') {
            if ($balance < $chat) {
                Toastr::error('Your balance is too low for this transaction. Please fund your wallet and try again.', 'Balance not Enough');
                return redirect()->back();
            }
        }
        if ($request->book_type == 'video') {
            if ($balance < $video) {
                Toastr::error('Your balance is too low for this transaction. Please fund your wallet and try again.', 'Balance not Enough');
                return redirect()->back();
            }
        }

        $check = Booking::where('doctor_id', $request->doctor_id)->where('patient_id', $id)->where('status', 1)->first();
        if ($check) {

            Toastr::error('You already have book this doctor', 'Not Allowed');
            return redirect()->back();
        }

        $book = new Booking();
        $book->patient_id = $id;
        $book->doctor_id = $request->doctor_id;
        $book->book_type = $request->book_type;
        $book->save();

        $patient = User::findorFail($id);
        if ($request->book_type == 'chat') {
            $patient->balance = $patient->balance - $chat;
        }
        if ($request->book_type == 'video') {
            $patient->balance = $patient->balance - $video;
        }
        $patient->update();

        Toastr::success('Your Booking has been made sucessfully', 'Done');

        $data['users'] = User::where('role', 'doctor')->where('status', 1)->get();
        return redirect()->back();
    }

    public function MyReservations()
    {

        $data['doctors'] = Booking::where('patient_id', Auth::user()->id)->where('status', 1)->get();
        return view('patient.reservations', $data);
    }
    public function GetData(Request $request)
    {
        return Booking::with('patient')->findOrFail($request->id);
    }
    public function PreFormSave(Request $request)
    {

        $book = Booking::findOrFail($request->get_id);
        $book->pre_consultation = 1;
        $book->person = $request->person;
        $book->name = $request->name;
        $book->age = $request->age;
        $book->sex = $request->sex;
        $book->complain = $request->complain;
        $book->temperature = $request->temperature;
        $book->pulse = $request->pulse;
        $book->bp = $request->bp;
        $book->respiratory = $request->respiratory;
        $book->sugar = $request->sugar;
        $book->history = $request->history;
        $book->weight = $request->weight;
        $book->update();

        Toastr::success('Pre-consultation Form filled successfully', 'Done');
        return redirect()->back();
    }

    public function download($id)
    {

        $book = $book = Booking::findOrFail($id);
        $medicines = Prescription::where('booking_id', $id)->get();
        $pdf = PDF::loadView('pdf.prescription', compact('book', 'medicines'));
        return $pdf->download('prescription_form.pdf');
    }
}
