<?php

namespace App\Http\Middleware;

use Closure;

class RedirectIfNotAgent
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = "agent")
    {
        if (!auth()->guard($guard)->check()) {
            return redirect(route('agent.login'));
        }
        return $next($request);
    }
}
