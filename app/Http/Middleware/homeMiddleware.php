<?php

namespace App\Http\Middleware;

use Closure;

class homeMiddleware
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
        if($request->input('age') <= 50){
            return redirect('main');
        }
        return $next($request);
    }
}
