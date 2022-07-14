<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File as File;

class PatientProfileController extends Controller
{
    public function index(){
        return view('profile.patient');
    }
    public function settings(){
        return view('profile.settings_patient');
    }
    public function update(Request $request, $id){
       
        // dd($request->all());

        $user = User::FindorFail($id);
        $user->first_name = $request->first_name;
        $user->middle_name = $request->middle_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->address = $request->address;
    

        if ($request->file('image') != null) {

        $destination = 'uploads/avatar/'.$user->picture; 
        
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/avatar', $filename);
        $user->picture = $filename;
    }

    if(Auth::user()->role == 'doctor'){
        $user->chat_rate = $request->chat_rate;
        $user->video_rate = $request->video_rate;
    }

    $user->update();

    Toastr::success('Profile has been Updated sucessfully', 'Done');
    return redirect()->back();
    }
}
