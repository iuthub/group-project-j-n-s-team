<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function aboutus(){
        return view('aboutus');
    }

    public function instruction(){
        return view('instruction');
    }

    public function contact(){
        return view('contact');
    }
}
