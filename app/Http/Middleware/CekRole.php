<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param string $role
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ... $role)
    {
        // foreach ($roles as $role) {
        //     if (! $request->user()->hasRole($role)) {
        //       return $next($request);
        //     }
        //   }
        //dd($role);

        if (! in_array($request->user()->hasRole(1), $role)) {
            return redirect()->route('xxx');
           }
           return $next($request);



    }
}
