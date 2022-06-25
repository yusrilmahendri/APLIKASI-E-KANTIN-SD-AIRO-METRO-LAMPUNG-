<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next,...$roles)
    {
        // dia cek apakah parameter role nya ada gk 
        //klo ada ekseksusi  pada if 
        if(in_array($request->user()->role,$roles)){
            return $next($request);     
         }
         return redirect('/');
    }
}
