<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $path = Request::route()->getName();
        if (Auth::guard('users')->check()) {
            if(in_array($path, ['front.register','front.login','front.forget_password','front.reset_password'])) {
                return redirect()->route( 'front.profile_details');
            } else {
                return $next($request);
            }
        } else {
            if(in_array($path, ['front.register','front.login','front.forget_password','front.reset_password'])) {
                return $next($request);
            } else {
                return redirect()->route('front.login');
            }
        }
    }
}
