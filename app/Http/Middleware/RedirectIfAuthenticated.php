<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {

            $redirect_path = null;

            switch ($guard) {
                case 'admin':
                    $redirect_path = route('admin.home');
                    break;
                default:
                    $redirect_path = route('member.profile');
                    break;
            }

            return redirect($redirect_path);

        }

        return $next($request);
    }
}
