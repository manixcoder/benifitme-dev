<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::check() && Auth::user()->isAdmin() || Auth::user()->isMerchant() || Auth::user()->isUsers()) {
        //     return $next($request);
        // } else {
        //     $Role = Auth::user()->roles->first();
        //     return redirect('/' . $Role->name);
        // }

        // dd();
        // dd(Auth::guard($guard)->check());
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        return $next($request);
    }
}
