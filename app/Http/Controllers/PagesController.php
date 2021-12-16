<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view('front.about');
    }

    public function doctors(){
        return view('front.doctors');
    }

    public function contact(){
        return view('front.contact');
    }
}
