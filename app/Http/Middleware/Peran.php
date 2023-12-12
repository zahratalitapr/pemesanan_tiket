<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;


class Peran
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $peran)
    {
        // return $next($request);
        if(Auth::check()){
            $peran = explode('-', $peran);
            foreach($peran as $group){
                if(Auth::user()->role == $group){
                    return $next($request);
                }
            }
        }
        return redirect('/');
    }
}
