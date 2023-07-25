<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->name === 'Amir' && $user->email === 'amir.rai.pokhara@gmail.com') {
            return $next($request);
        }

        return abort(404); // Redirect to a suitable URL if the condition is not met
    }
}
