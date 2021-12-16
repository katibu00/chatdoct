<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Booking;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function DoctorsIndex(){
        $data['users'] = User::where('role','doctor')->where('status',1)->get();
        return view('patient.doctors',$data);
    }

    public function DoctorsDetails($number){
        $data['user'] = User::where('number',$number)->first();
        return view('patient.details',$data);
    }

    public function BookDoctor(Request $request){
     
        $id = Auth::user()->id;

        $check = Booking::where('doctor_id', $request->doctor_id)->where('patient_id',$id)->where('status',1)->first();
        if($check){

            Toastr::error('You already have book this doctor', 'Not Allowed');
            return redirect()->back();
        }

        $book = new Booking();
        $book->patient_id = $id;
        $book->doctor_id = $request->doctor_id;
        $book->save();

        Toastr::success('Your Booking has been made sucessfully', 'Done');

        $data['users'] = User::where('role','doctor')->where('status',1)->get();
        return redirect()->back();
    }


    public function MyReservations(){

        $data['doctors'] = Booking::where('patient_id',Auth::user()->id)->where('status',1)->get();
        return view('patient.reservations',$data);
    }
    public function GetData(Request $request){
       return Booking::findOrFail($request->id);
    }
    public function PreFormSave(Request $request){
       

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
}
