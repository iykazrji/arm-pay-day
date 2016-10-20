<?php

namespace App\Http\Middleware;

use Closure;

class AuthChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        $pass_routes_with_out_auth = [
            "login",
            "register"
        ];

        /*======================================================================
        | Check if {$request->path()} is part of the pass_routes_with_out_token
        =======================================================================*/
        foreach ($pass_routes_with_out_auth as $route) 
        {
            if ($route == $request->path()) 
            {
                return $next($request);
            }
        }
        
//        if (isset($_COOKIE['__ARM_UA']))
//        {
//            return $next($request);
//        }
//        else
//        {
//        	return redirect()->to('login');
//        }

    }
}
