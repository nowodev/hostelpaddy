<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (auth($guard)->check()) {
                return redirect(RouteServiceProvider::ADMINHOME);
            }

            if ($guard == 'student' && auth($guard)->check()) {
                return redirect(RouteServiceProvider::STUDENTHOME);
            }

            if ($guard == 'agent' && auth($guard)->check()) {
                return redirect(RouteServiceProvider::AGENTHOME);
            }
        }

        return $next($request);
    }
}
