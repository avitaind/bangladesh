<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Country;
use App\ASPAPIService;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $countries = Country::all()->mapWithKeys(function( $item ) {
            return [ $item['code'] =>  $item->name() ];
        })->toArray();

        return view('auth.register', compact('countries'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'country' => 'required|size:2',
            'birthday' => 'nullable|date|after:1000-01-01',
            'tnc' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new User( $data );
        $user->password = bcrypt($data['password']);
        $user->accept_edm = ( array_get($data, 'edm')  === 'accept' );
        
        $user->save();

        return $user;

    }

    protected function registered(Request $request, $user)
    {

        $source = $request->get('source');


        if ( $source == 'mirror' && \Session::has('auth_source')) {
            \Log::info('registered Called', ['source' => session('auth_source')]);
            return redirect()->intended($this->redirectPath());
        }

        return redirect($this->redirectPath());
    }
}
