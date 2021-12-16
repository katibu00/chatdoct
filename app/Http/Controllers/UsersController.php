<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;

class UsersController extends Controller
{
    public function applicationsIndex(){
        $data['users'] = User::where('role','pending')->where('status',0)->get();
        return view('users.applications',$data);
    }

    public function ApproveRequest($id){
     
        $user = User::findorFail($id);
        $user->role = 'doctor';
        $user->status = 1;
        $user->update();

        Toastr::success('The user has been Approved as Doctor sucessfully', 'Done');
        return redirect()->back();
    }
}
