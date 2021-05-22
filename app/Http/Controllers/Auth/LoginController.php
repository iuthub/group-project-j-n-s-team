<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {

        return view('auth/login');
    }

    /**
     * Authenticating users by roles
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {

        //Validate
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        //Sign in
        if (Auth::attempt($request->only('username', 'password'), $request->remember)) {
            if (auth()->user()->is_admin == true) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('home');
            }

        } else {
            return back()->with('status', 'Invalid login details');
        }


    }

    public function reset_password(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User:: where('email', $request->email)->first();
        if ($user != null) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect('login');
        }
        return back()->with('status', 'Wrong email');


    }
}
