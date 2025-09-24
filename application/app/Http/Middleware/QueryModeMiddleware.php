<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class QueryModeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if($request->has('mode')) {
            $mode = $request->query('mode');
            $request->attributes->set('mode', $mode);
            logger()->info("Request mode is $mode");

            $response = $next($request);
            $response->headers->set('X-Mode', $mode);
        }
        return $response;
    }
}
