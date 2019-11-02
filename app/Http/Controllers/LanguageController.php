<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LanguageController extends Controller
{
    //
    public function switchLang(Request $request, $lang)
    {

        if ( array_key_exists($lang, config('languages') ) ) {
            Session::put('applocale', $lang);
        }

        return redirect( )->back( );
    }

}
