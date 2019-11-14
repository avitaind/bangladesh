<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class AppMiddleware
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
        $country = 'mu';

        /*if ( $country == 'us') {
            return redirect('https://avita-americas.com/');
        } else if ( !$country ) {
            return redirect('/hk');
        }*/

        $this->handleLocale($request);

        // Handle title suffix
        $suffix = $this->getTitleSuffixByCountry( $country );
        view()->share('TITLE_SUFFIX', $suffix);

        $have_liber12 = !in_array($country, ['th', 'ph']);

        view()->share('HAVE_LIBER_12', $have_liber12);

        $have_liber_u = in_array($country, ['hk', 'tw', 'cn', 'vn']);

        view()->share('HAVE_LIBER_U', $have_liber_u);
		
		$have_magus = in_array($country, ['hk', 'sg']);

        view()->share('HAVE_MAGUS', $have_magus);

        // Handle Redirect for support
        $endpoint = $request->segment(1);

        return $next($request);
    }

    public function handleCountry($request) {

        // Get country code from URL
        $country_code = strtolower($request->segment(1));

//        $all_countries = array_keys( config('constants.countries') );

        $all_countries = enabled_countries();

        $country = null;

        // Try to identify country from URL.
        if ( in_array($country_code, $all_countries ) ) {
            $country = $country_code;

        } else {

            $last_country = session('country');

            if ( $last_country ) {
                $country = $last_country;
            } else {

                $geoip = geoip();

                $location = $geoip->getLocation( );
                $ip = $geoip->getClientIP();

                $ip_country = strtolower( $location->iso_code );

                if ($ip_country == "us") {
                    $country = 'us';
                    return 'us';
                } else {
                    $country = $ip_country;
                }
            }
        }

        if ( !in_array( $country, $all_countries ) ) {
            $country = null;
        }

        // Store to session
        session(['country' => $country]);

        view()->share('country', $country);
        \URL::defaults(['country' => $country]);

        $supported_languages = supported_language( $country );
        view()->share('supported_languages', $supported_languages);

        return $country;
    }

    protected function handleLocale( $request ) {

        // Setup default locale.
        $locale = config('app.fallback_locale');

        $languages = supported_language( session('country', 'hk'));

        if (count($languages) == 1) {
            $locale = array_first( $languages);
        }

        if( Session::has('applocale') ) {
            $app_locale = Session::get('applocale');

            if ( in_array( $app_locale, $languages ) ) {
                $locale = session('applocale');
            }
        }

        app()->setLocale( $locale );
        view()->share('lang', $locale);
    }

    protected function getTitleSuffixByCountry( $country ) {

        $suffix = "";

        $lang = app()->getLocale();

        switch ( $country ) {
            case 'hk':

                if ( $lang == 'en' ) {
                    return '| AVITA Hong Kong Official Website';
                } else {
                    return '| AVITA 香港官方網站';
                }

            case 'sg':  return '| AVITA Singapore Official Website';
			case 'mu':  return '| AVITA Mauritius Official Website';
            case 'tw':  return '| AVITA 台灣官方網站';
            case 'my':  return '| AVITA Malaysia Official Website';
            case 'th':  return '| AVITA Thailand Official Website';
            case 'cn':  return '| AVITA 中国官方网站';
            case 'ph':  return '| AVITA Philippines Official Website';
            case 'vn':
                if ( $lang == 'en' ) {
                    return '| AVITA Vietnam Official Website';
                } else {
                    return '| AVITA Vietnam Official Website';
                }

            case 'id':

                if ( $lang == 'en') {
                    return '| AVITA Indonesia Official Website';
                } else {
                    return '| Situs Resmi AVITA Indonesia';
                }

            case 'in':  return '| AVITA India Official Website';
            default:    return "";
        }

    }

    protected function shouldRedirectToCountryPicker( \Illuminate\Http\Request $request ) {

        $routeName = $request->route()->getName();

        if ( $routeName == 'country.picker') {
            return false;
        }

        if ($routeName == 'country.switch') {
            return false;
        }

        if ( $request->is('admin/*')) {
            return false;
        }


        return true;

    }

}
