<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function index()
    {
        return view('schools/public');
    }
}
