<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Session;
use Closure;

class RedirectIfNotSeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard='seller')
    {
        
        if (!Auth::guard($guard)->check()) {
            return redirect('/');
        }
        return $next($request);
        
    }
}
