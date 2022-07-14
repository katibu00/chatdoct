<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\LoginLog;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function __construct()
    {
        auth()->logout();
        $this->middleware('guest')->except('logout');

    }



    public function index() {
        auth()->logout();
        return view('auth.login');
    }


    public function login(Request $request) {
    //    dd($request->all());
        $this->validate($request, [
                'email' => 'required',
                'password' => 'required',
            ]);

            $login = request()->input('email');
            $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'number';
            request()->merge([$fieldType => $login]);
            

                if(!auth()->attempt($request->only($fieldType, 'password'),$request->remember)){
                    return back()->with('status','Invalid login details');
                }

                if($request->number){
                     return redirect()->route('doctors.details',$request->number);
                }
               
                if(Auth::user()->role == 'admin'){
                    return redirect()->route('admin.home');
                }elseif(Auth::user()->role == 'patient'){
                    return redirect()->route('patient.home');
                }elseif(Auth::user()->role == 'doctor'){
                    return redirect()->route('doctor.home');
                }elseif(Auth::user()->role == 'pending'){
                    return redirect()->route('pending.home');
                }else{
                    return back()->with('status','You are not Authorized to Access this Website');
                }

    }

    public function logout(){
        auth()->logout();
        return redirect('/');
    }
}
