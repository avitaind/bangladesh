<?php

namespace App\Http\Middleware;

use App\ServiceProvider;
use Closure;

class APIServiceProviderMiddleware
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

        $access_key = $request->header('X-SP-KEY');

        $sp = ServiceProvider::where('access_key', $access_key)->first();

        if ($sp == null || !$sp->enabled) {
            return response()->json(['message' => 'Unauthenticated'], 401);
        }

        return $next($request);
    }
}
