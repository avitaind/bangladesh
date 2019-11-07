<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class CountryController extends Controller
{
    //

    public function switchCountry(Request $request, $country) {

        $countries = config('constants.countries');

        $languages = config('languages');

        $lang = $request->get('lang');

        if ( $lang && array_key_exists($lang, $languages) ) {
            Session::put('applocale', $lang);
        }

        if ( $country && array_key_exists( $country, $countries) ) {
            Session::put('country', $country );

            return redirect('/'.$country);
        }
        
        return redirect( '/' );
    }
}
