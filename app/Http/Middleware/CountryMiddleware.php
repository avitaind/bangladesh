<?php

namespace App\Http\Middleware;

use Closure;

class CountryMiddleware
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

        $country_code = strtolower($request->segment(1));

        $all_countries = enabled_countries();

        if (!in_array($country_code, $all_countries)) {

            // Reset country session
            session(['country' => null]);
            return redirect('/');
        } 

        return $next($request);
    }
}
