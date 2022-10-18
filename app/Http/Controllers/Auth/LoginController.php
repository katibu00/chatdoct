<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{

    public function __construct()
    {
        auth()->logout();
        $this->middleware('guest')->except('logout');

    }

    public function index()
    {
        auth()->logout();
        return view('auth.login');
    }

    public function login(Request $request)
    {
        //    dd($request->all());

        $validator = Validator::make($request->all(), [
            'email' => 'required|max:191',
            'password' => 'required|max:191',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'errors' => $validator->messages(),
            ]);
        }

        $login = request()->input('email');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'number';
        request()->merge([$fieldType => $login]);

        if(!auth()->attempt($request->only($fieldType, 'password'),$request->remember)){
            return response()->json([
                'status'=>401,
                'message'=>'Invalid Credentials'
            ]);
        }

        if ($request->number) {
            return redirect()->route('doctors.details', $request->number);
        }

        if (Auth::user()->role == 'admin') {
            return response()->json([
                'status'=>200,
                'user'=>'admin',
            ]);
        } elseif (Auth::user()->role == 'patient') {
            return response()->json([
                'status'=>200,
                'user'=>'patient',
            ]);
        } elseif (Auth::user()->role == 'doctor') {
            return response()->json([
                'status'=>200,
                'user'=>'doctor',
            ]);
        } elseif (Auth::user()->role == 'pending') {
            return response()->json([
                'status'=>200,
                'user'=>'pending',
            ]);
        } else {
            return back()->with('status', 'You are not Authorized to Access this Website');
        }

    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
