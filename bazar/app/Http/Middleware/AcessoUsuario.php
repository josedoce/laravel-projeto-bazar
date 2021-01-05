<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AcessoUsuario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('usuario')){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
