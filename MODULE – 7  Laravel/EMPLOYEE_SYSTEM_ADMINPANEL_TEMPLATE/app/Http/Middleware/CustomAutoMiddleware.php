<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;




class CustomAutoMiddleware
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
        // Custom auto logic here
        // For example, let's say you want to automatically log each request
        \Log::info('Request Data', $request->all());

        // Add custom header
        $request->headers->set('X-Custom-Header', 'AutoMiddlewareValue');

        // Perform some automatic check, e.g., API key validation
        if (!$request->hasHeader('X-API-Key') || $request->header('X-API-Key') !== 'valid_api_key') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Allow the request to proceed
        return $next($request);
    }
}
