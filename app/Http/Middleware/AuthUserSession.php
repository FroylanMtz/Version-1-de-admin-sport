<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthUserSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$allowed_types)
    {
        if(in_array(Auth::user()->tipo_usuario,$allowed_types)){
           return $next($request);
        }
        
        return redirect('/');
    }
}
