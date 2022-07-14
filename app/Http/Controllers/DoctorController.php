<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Prescription;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function SchedulesIndex()
    {
        $data['weekdays'] = explode(',',Auth::user()->weekdays);
        $data['saturdays'] = explode(',',Auth::user()->saturdays);
        $data['sundays'] = explode(',',Auth::user()->sundays);
        return view('profile.my_schedules',$data);
    }
    public function SchedulesStore(Request $request)
    {

        $id = Auth::user()->id;
        $user = User::FindorFail($id);
       
        //weekend
        if($request->weekdays == ''){
            $user->weekdays = '';
        }else{
            $user->weekdays = implode(',', $request->weekdays);
        }
       //saturdays
        if($request->saturdays == ''){
            $user->saturdays = '';
        }else{
            $user->saturdays = implode(',', $request->saturdays);
        }
      //sundays
        if($request->sundays == ''){
        $user->sundays = '';
        }else{
            $user->sundays = implode(',', $request->sundays);
        }
       
        $user->update();

        Toastr::success('Your Schedules has been set sucessfully', 'Done');
        return redirect()->back();
    }

    public function MyPatients(){

        $data['doctors'] = Booking::where('doctor_id',Auth::user()->id)->where('status',1)->get();
        return view('doctor.reservations',$data);
    }
    public function Chat(){

        return view('test2');
    }

    public function link(Request $request){

        $link = Booking::findorFail($request->get_id);
        $link->link = $request->link;
        $link->update();

        Toastr::success('Link sent sucessfully', 'Done');
        return redirect()->back();
    }

    public function prescription(Request $request){
// dd($request->all());

        $check = Prescription::where('booking_id',$request->get_id)->first();
        if($check){
            Toastr::error('Prescription has Already been sent', 'Not Allowed');
            return redirect()->back();
        }
      
        $nameCount = count($request->name);
        if($nameCount != NULL){
            for ($i=0; $i < $nameCount; $i++){
                $prescription = new Prescription();
                $prescription->booking_id = $request->get_id;
                $prescription->name = $request->name[$i];
                $prescription->save();
            }
        }

        $book = Booking::findorFail($request->get_id);
        $book->prescription = 1;
        $book->update();

        Toastr::success('Prescriptiuon Sent sucessfully', 'Done');
        return redirect()->back();
    }



}
