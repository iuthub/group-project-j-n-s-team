<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guest()|| auth()->user()->is_admin==false)
        {
            return redirect()->route('login')->with('status', "You don't have access.");
        }
        return $next($request);
    }
}
