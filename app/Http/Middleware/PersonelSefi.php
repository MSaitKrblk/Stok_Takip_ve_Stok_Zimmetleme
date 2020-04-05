<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PersonelSefi
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
        if (Auth::check() && Auth::user()->yetki()==4 || Auth::user()->yetki()==1 || Auth::user()->yetki()==3){
            return $next($request);
        }
        else
            return redirect('/admin');
    }
}