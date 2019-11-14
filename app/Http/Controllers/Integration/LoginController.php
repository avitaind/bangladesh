<?php

namespace App\Http\Controllers\Integration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

    public function handleLoginRequest(Request $request) {

        $source = $request->get('source');
        $callback = $request->get('callback');
        $redirect_url = $request->get('redirect');

        \Log::info( "User Scan QR Code: ", compact('source', 'callback', 'redirect_url'));

        $validator = \Validator::make($request->all(), [
            'source' => 'required',
            'callback' => 'required'
        ]);

        if ( $validator->fails() ) {
            throw (new \Exception("Missing Parameters"));
        }

        session(['auth_source' => $source, 'auth_callback_url' => $callback, 'auth_redirect_url' => $redirect_url]);



        $user = \Auth::user();

        if ( !$user ) {

            // If not login, return to login.
            return redirect()->guest( route('login', ['source' => $source]) );
        } else {
            // If login, return to ask for approval.
            return redirect()->route('integration.approval', $source);
        }



    }
}
