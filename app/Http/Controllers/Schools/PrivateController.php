<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;

class PrivateController extends Controller
{
    public function index()
    {
        return view('schools/private');
    }
}
