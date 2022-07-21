<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $data['patients'] = User::where('role','patient')->get()->count();
        $data['doctors'] = User::where('role','doctor')->get()->count();
        $data['admins'] = User::where('role','admin')->get()->count();
        $data['balance'] = User::sum('balance');
        return view('admin',$data);
    }
    public function doctor()
    {


        $data['total'] = Booking::where('doctor_id', Auth::user()->id)->get()->count();
        $data['recent'] = Booking::where('doctor_id', Auth::user()->id)->get()->count();
        $data['admins'] = User::where('role','admin')->get()->count();
        // $data['balance'] = User::sum('balance');
        return view('doctor',$data);
    }
    public function patient()
    {


        $data['recent'] = Booking::where('patient_id', Auth::user()->id)->get();
        $data['users'] = User::where('role','doctor')->where('status',1)->where('featured',1)->get();
        $data['user'] = User::where('id',Auth::user()->id)->first();
        // $data['balance'] = User::sum('balance');
        return view('patient',$data);
    }
}
