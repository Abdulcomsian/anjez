<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserVerification
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::user()->type != 'Admin')
        {
            if(!Auth::user()->is_verified)
            {
                Auth::logout();
                return redirect()->route('login')->withInfo('You need to confirm your account. We have sent you an activation code, please check your email.');
            }
            else
            {
                return $next($request);
            }
        }
        else
        {
            return redirect()->route('admindashboard.admin-index');
        }
    }
}
