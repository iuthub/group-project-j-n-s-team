<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;

class SpecialController extends Controller
{
    public function index()
    {
        return view('schools/special');
    }
}
