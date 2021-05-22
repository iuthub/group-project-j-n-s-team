<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function instruction(){
        return view('instruction');
    }
}
