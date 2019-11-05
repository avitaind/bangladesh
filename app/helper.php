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
    return ['hk', 'sg', 'tw', 'my', 'cn', 'th', 'vn', 'in', 'id', 'ph','bd'];
}

function supported_language( $country ) {

    switch ( $country ) {
        case 'bd':
            return ['en'];
    }

}

function facebookLinkForCountry( $country ) {

    switch ( $country ) {
        case 'bd':  return "https://www.facebook.com/AVITAHongKong/";
        default:    return "";
    }
}

function instagramLinkForCountry( $country ) {

    switch ( $country ) {
        case 'bd':  return "https://www.instagram.com/avitahongkong/";
        default:    return "";
    }
}

function twitterLinkForCountry( $country ) {

    switch ( $country ) {
        case 'bd':  return 'https://twitter.com/AvitaIndia';
        default:    return "";
    }
}

function metaKeywordByCountryAndLanguage( $country, $language ) {

    // Default
    $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";

    switch ( $country ) {
        case 'bd':
            if ( $language == 'en') {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";
            } else {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";
            }
            break;
         }

    return $keyword;
}

function metaDescriptionByCountryAndLanguage( $country, $language ) {

    // Default
    $description = "LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";

    switch ( $country ) {
        case 'hk':
            if ( $language == 'en') {
                $description = "LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";
            } else {
                $description = 'LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.';
            }


            break;

    }

    return $description;

}


function googleAnalyticCode( $country ) {

    switch ( $country ) {
        case 'bd' : return "UA-128035503-8";
           }

    return 'UA-106387992-1';    // Default


}