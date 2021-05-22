<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;

class PresidentController extends Controller
{
    public function index()
    {
        return view('schools/president');
    }
}
