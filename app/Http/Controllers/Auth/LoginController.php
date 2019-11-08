<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/member/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function redirectToFacebook( ){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback(Request $request){

        try {
            $sns_user = Socialite::driver('facebook')->fields(['name', 'first_name', 'last_name', 'email', 'gender'])->user();
        } catch ( \Exception $exception ) {
            return redirect( url('/login') );
        }

        // Check is user exists in db.

        $email = $sns_user->getEmail();

        $user = User::where('email', $email)->first();

        if ( !$user ) {

            $profile = $sns_user->user;

            $user_data = [
                'name' => array_get($profile, 'name'),
                'first_name' => array_get($profile, 'first_name'),
                'last_name' => array_get($profile, 'last_name'),
                'email' => $sns_user->getEmail(),
                'password' => bcrypt( str_random(16 )),
                'country' => 'HK'
            ];

            $gender = array_get($sns_user->user,'gender');

            if ($gender == 'female') {
                $user_data['gender'] = 'f';
            } else if ( $gender =='male'){
                $user_data['gender'] = 'm';
            }

            if ( array_key_exists('gender', $user_data) ) {
                $user = User::create($user_data);
            }
        }

        if ( $user ) {
            \Auth::login( $user );
            return $this->sendLoginResponse( $request );
        } else {
            $input = array_except($user_data, ['password']);
            return redirect()->route('register')->withInput($input);
        }
    }

    public function redirectToGoogle( ){

        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request) {

        try {
            $sns_user = Socialite::driver('google')->user();
        } catch ( \Exception $exception ) {
            return redirect( url('/login') );
        }
        // Check is user exists in db.

        $email = $sns_user->getEmail();
        $user = User::where('email', $email)->first();


        if ( !$user ) {

            $profile = $sns_user->user;
            $user_data = [
                'first_name' => array_get($profile, 'name.givenName'),
                'last_name' => array_get($profile, 'name.familyName'),
                'name' => $sns_user->getName(),
                'email' => $sns_user->getEmail(),
                'password' => bcrypt( str_random(16 )),
                'country' => 'HK'
            ];

            $gender = array_get($sns_user->user,'gender');

            if ($gender == 'female') {
                $user_data['gender'] = 'f';
            } else if ( $gender =='male'){
                $user_data['gender'] = 'm';
            }

            if ( array_key_exists('gender', $user_data) ) {
                $user = User::create($user_data);
            }
        }

        if ( $user ) {
            \Auth::login( $user );
            return $this->sendLoginResponse( $request );
        } else {

            $input = array_except($user_data, ['password']);

            return redirect()->route('register')->withInput($input);
        }

    }

    protected function authenticated(Request $request, $user)
    {
        \Log::info('Authenticated Called', ['source' => session('auth_source')]);

        return redirect()->intended($this->redirectPath());
    }

}
