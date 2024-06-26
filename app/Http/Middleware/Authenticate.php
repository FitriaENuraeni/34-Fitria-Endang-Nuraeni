<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if(
            session()->get("isLogged") == null && 
            session()->get("userId") == null
        ){
            return redirect()->route("auth.loginPage")->with("error","Perlu login terlebih dahulu!");
        }
        if(
            session()->get("role") != $role 
        ){
            return redirect()->route("auth.loginPage")->with("error","Anda tidak memiliki akses!");
        }


        return $next($request);
    }
}
