<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Monthnum
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
        if($request->number>3){
            return redirect('con/1');
        }
        return $next($request);
    }
}
