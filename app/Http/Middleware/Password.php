<?php

namespace App\Http\Middleware;

use Closure;

class Password
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
        if(auth()->user()->first_time == 0){
            return $next($request);
        } 
        return redirect('/changepassword')->with('error','You need to change your password');
    }
}
