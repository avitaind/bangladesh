<?php

namespace App\Http\Middleware;

use App\User;
use App\UserToken;
use Carbon\Carbon;
use Closure;

class AvitaAuthMiddleware
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
        $token = $request->get('api_token');

        $user_token = UserToken::where('expire_date', '>', Carbon::now())
            ->whereToken($token)->first();

        if ( $user_token ) {
            $user = $user_token->user;

            if ($user) {
                \Auth::login($user, false);
                return $next($request);
            }

        }

        return response()->json(['message' => 'Unauthenticated'], 401);
    }
}
