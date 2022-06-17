<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserIsActive
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
        if(auth()->check() && ! auth()->user()->isActive()) {
            auth()->logout();
            abort(403,'You Are Not Active anymore');
        }
        return $next($request);
    }
}
