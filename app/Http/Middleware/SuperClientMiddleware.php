<?php

namespace App\Http\Middleware;

use Closure;

class SuperClientMiddleware
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
        if (auth()->check() && auth()->user()->is_super_client)
            return $next($request);

        return redirect('/');
    }
}
