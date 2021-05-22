<?php

namespace App\Http\Controllers\Schools;

use App\Http\Controllers\Controller;
use App\School;

class SchoolsController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return view('schools/schools', compact('schools'));
    }

    public function school_details($id)
    {
        $school = School::find($id);
        return view('schools/school-details', compact('school'));
    }
}
