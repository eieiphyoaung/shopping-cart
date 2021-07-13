<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (Auth::check()) {
            $user_type = Auth::user()->type;

            if ($user_type == 1) {
                return $next($request);
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/admin/login');
        }
    }
}
