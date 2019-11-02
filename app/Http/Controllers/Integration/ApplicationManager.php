<?php

namespace App\Http\Controllers\Integration;

use App\User;
use App\UserToken;
use Carbon\Carbon;

class ApplicationManager {


    public function addNewToken(User $user, $app_code ) {


        $token = $this->uniqueToken();

        $user_token = new UserToken( );
        $user_token->user_id = $user->id;
        $user_token->token = $token;
        $user_token->expire_date = Carbon::today()->addMonth( 3 );
        $user_token->application = $app_code;
        $user_token->save( );

        return $user_token;
    }

    public function refresh_token(UserToken $user_token) {

        $user_token->token = $this->uniqueToken();
        $user_token->expire_date = Carbon::today()->addMonth( 3 );
        $user_token->update( );

        return $user_token;
    }

    protected function uniqueToken( ) {

        do {
            $token = str_random(100);
        } while ( UserToken::whereToken( $token)->count() >= 1 );

        return $token;
    }

}