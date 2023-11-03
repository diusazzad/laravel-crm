<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Get the user's role.
        // $userRole = Auth::user()->role;

        // If the user's role does not match the required role, redirect them to the appropriate route.
        // if ($userRole !== $role) {
        //     if ($userRole === 0) {
        //         return redirect()->route('user.dashboard');
        //     } elseif ($userRole === 1) {
        //         return redirect()->route('admin.primary');
        //     } else {
        //         return redirect()->route('login');
        //     }
        // }

        // The user's role matches the required role, so let them proceed to the next middleware.
        return $next($request);
    }
}
