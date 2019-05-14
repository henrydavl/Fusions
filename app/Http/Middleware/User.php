<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            if (Auth::user()->isUser()){
                return $next($request);
            }
        }
        return redirect('/')->with('error', 'Please login or register your account');
    }
}
