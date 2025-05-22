<?php

namespace App\Http\Middleware;

use App\Models\Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(FacadesAuth::check() &&  FacadesAuth::user()->role == 1){
        return $next($request);
            
        }else{
            return redirect()->route('auth.register')->with('danger','you are not admin');
        }
    }
}