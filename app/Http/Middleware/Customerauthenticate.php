<?php

namespace App\Http\Middleware;

//use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
class Customerauthenticate extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle($request, Closure $next)
    // {
    //     return $next($request);
    // }

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request){
       
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
