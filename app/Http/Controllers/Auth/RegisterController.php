<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {

        // Validating
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required:2555',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6'
        ]);

        // Storing
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //Sign in
        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Invalid login details');
        }

        //Redirecting
        return redirect()->route('users.dashboard');
    }


}
