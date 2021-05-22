<?php

namespace App\Http\Controllers\Subjects;

use App\Http\Controllers\Controller;
use App\Subject;

class SubjectsController extends Controller
{
    public function index()
    {
        return view('subjects/subjects');
    }

    public function grade($grade)
    {
        $subjects = Subject::where('grade', $grade)->get();
        return view('subjects/class', ['subjects' => $subjects]);
    }

    public function first()
    {
        return view('subjects/1class');
    }

    public function second()
    {
        return view('subjects/2class');
    }

    public function third()
    {
        return view('subjects/3class');
    }

    public function fourth()
    {
        return view('subjects/4class');
    }

    public function fifth()
    {
        return view('subjects/5class');
    }

    public function sixth()
    {
        return view('subjects/6class');
    }

    public function seventh()
    {
        return view('subjects/7class');
    }

    public function eigth()
    {
        return view('subjects/8class');
    }

    public function ninth()
    {
        return view('subjects/9class');
    }

    public function tenth()
    {
        return view('subjects/10class');
    }

    public function eleventh()
    {
        return view('subjects/11class');
    }

}
