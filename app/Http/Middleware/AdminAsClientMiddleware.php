<?php

namespace App\Http\Middleware;

use Closure;

class AdminAsClientMiddleware
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
        if (auth()->user()->is_admin || auth()->user()->is_super_client) {
            if (!session('client_id'))
                return auth()->user()->root_route;
        }

        return $next($request);
    }
}
