<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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
        //check if the user is logged in and has the admin role.
        if (!auth()->user()->hasRole('admin')) {
            //abort the request with a 403 Forbidden response
            abort(403);
        }
        return $next($request);
    }
}
