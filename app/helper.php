<?php

function bytesToHuman($bytes, $precision = 2)
{
    $units = [' bytes', ' KB', ' MB', ' GB', ' TB'];

    for ($i = 0; $bytes > 1024; $i++) {
        $bytes /= 1024;
    }

    return round($bytes, $precision) . $units[$i];
}

function enabled_countries(  ) {

	return ['bd','hk'];
}

function supported_language( $country ) {

    switch ( $country ) {
        case 'bd':
            return ['en'];

        default:
            return ['en'];
    }

}

function youtubeLinkForCountry( $country ) {

    switch ( $country ) {

        case 'bd': return 'https://www.youtube.com/channel/UCJBDDclYWXT4WLRw8CnnP4Q';
        default:    return "";
    }
}

function facebookLinkForCountry( $country ) {

    switch ( $country ) {

        case 'bd': return 'https://www.facebook.com/AvitaBD/';
        default:    return "";
    }
}

/*function instagramLinkForCountry( $country ) {

    switch ( $country ) {

        case 'bd':  return 'https://www.instagram.com/avitabd/';
        default:    return "";
    }
}

function twitterLinkForCountry( $country ) {

    switch ( $country ) {

        case 'bd': return 'https://twitter.com/AvitaBangladesh';
        default:    return "";
    }
}
*/

function metaKeywordByCountryAndLanguage( $country, $language ) {

    // Default
    $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";

    switch ( $country ) {
        case 'bd':
		    {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";
            }
            break;
 
    }

    return $keyword;
}

function metaDescriptionByCountryAndLanguage( $country, $language ) {

    // Default
    $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";

    switch ( $country ) {
        case 'bd':
           {
                $description = "AVITA is a US based smart technology firm which prides itself on its elegant and highly efficient catalog of gadgets which transcend various categories. These gadgets not only make your work life balance tenable but augment your personality as well.";
            }
            break;
    
    }

    return $description;

}


function googleAnalyticCode( $country ) {

    switch ( $country ) {
        case 'bd' : return "UA-154623067-1";

    }


    return 'UA-154623067-1';    // Default


}
function GoogleMap( $key ) {

    return 'AIzaSyBWQCKIl7B4w27KcSW-tW4ja_Rk4SbcPnk';    // Default

}
function BaiduMap( $key ) {

    return '123';    // Default

}
