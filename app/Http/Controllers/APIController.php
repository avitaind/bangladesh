<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Integration\ApplicationManager;
use App\UserToken;
use App\UserTransformer;
use Illuminate\Http\Request;

class APIController extends Controller
{
    //

    public function myProfile(Request $request) {

        return (new UserTransformer())->transform($request->user());
    }

    public function updateProfile(Request $request) {

        $user = $request->user();

        if ( $gender = $request->gender ) {

            if (in_array( $gender, ['m', 'f'])) {
                $user->gender = $request->gender;
            }
        }

        if ( $name = $request->name ) {
            $user->name = $name;
        }

        $is_update = $user->update();

        return ['status' => 'done', 'is_update' => $is_update ];
    }

    public function logout(Request $request) {


        $token = $request->get('api_token');

        UserToken::whereToken($token)->delete();

        return response()->json(['status' => 'success']);

    }

    public function refreshToken(Request $request) {

        $source = $request->get('source');
        $token = $request->get('api_token');

        $userToken = UserToken::whereToken($token)->whereApplication($source)->first();

        if (!$userToken ) {
            return response()->json(['status' => 'fail', 'message' => 'Token not found.'], 500);
        } else {

            $appManager = new ApplicationManager();

            $userToken = $appManager->refresh_token( $userToken );

            $form_params = [
                'token'       => $userToken->token,
                'expire_date' => $userToken->expire_date->format("Y-m-d"),
            ];


            return response(['status' => 'success'] + $form_params, 200);

        }
    }
}
