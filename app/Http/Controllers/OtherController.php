<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function home()
    {
        return view('home', ["name" => "Niko Purnomo"]);
    }

    public function contact(){
        return view('contact', ["name" => "Niko Purnomo"]);
    }

    public function checkerboard(){
        return view('checkerboard');
    }
}
