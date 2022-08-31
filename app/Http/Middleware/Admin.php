<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->level_user_id == 2) {
            return $next($request);
          }else if(Auth::check() && Auth::user()->level_user_id == 1){
            return redirect()->route('home_owner');
          }elseif(Auth::check() && Auth::user()->level_user_id == 3){
            return redirect()->route('home_kasir');
          }
          return redirect()->route('home');
    }
}
