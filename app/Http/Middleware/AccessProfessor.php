<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AccessProfessor
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
        if(Auth::user()->hasAnyRoles(['professor', 'admin'])){
            return $next($request);
        }

        return redirect('home')->with('warning', 'Você precisa estar logado como Professor.');
    }
}
