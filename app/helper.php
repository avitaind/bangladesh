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

function facebookLinkForCountry( $country ) {

    switch ( $country ) {

        case 'bd': return 'https://www.facebook.com/AvitaBD/';
        default:    return "";
    }
}

function instagramLinkForCountry( $country ) {

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

function metaKeywordByCountryAndLanguage( $country, $language ) {

    // Default
    $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";

    switch ( $country ) {
        case 'hk':
            if ( $language == 'tc') {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, 指紋辨識, USB 3.0連接埠, USB Type-C, USB-C";
            } else {
                $keyword = "AVITA LIBER 12.5\", Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C";
            }
            break;
        case 'cn':
            $keyword = 'AVITA LIBER 12.5&quot;, Core i5 Intel CPU, Windows Hello, 指纹辨识, USB 3.0连接埠, USB Type-C, USB-C';
            break;
        case 'th':
            $keyword = 'AVITA LIBER 12.5&quot;, Core i5 Intel CPU, Windows Hello, fingerprint, USB 3.0 ports, USB Type-C, USB-C';
            break;

        case 'id':
            if ( $language = 'id') {
                $keyword = 'AVITA LIBER 12.5&quot;, Core i5 Intel CPU, Windows Hello, sidik jari, USB 3.0 ports, USB Type-C, USB-C';
                break;
            }
    }

    return $keyword;
}

function metaDescriptionByCountryAndLanguage( $country, $language ) {

    // Default
    $description = "LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";

    switch ( $country ) {
        case 'hk':
            if ( $language == 'tc') {
                $description = "LIBER是一趟發掘自我的全新旅程，是藝術、人文與科技的結合體。科技產品不一定只有一種個性，而應該更具靈性。LIBER不止是一台筆記型電腦。加入我們，認識更精彩的自己。";
            } else {
                $description = "LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";
            }
            break;
        case 'cn':
            $description = 'LIBER是一趟发掘自我的全新旅程，是艺术、人文与科技的结合体。科技产品不一定只有一种个性，而应该更具灵性。 LIBER不止是一台笔记型电脑。加入我们，认识更精彩的自己。';
            break;
        case 'th':

            if ( $language == 'en') {
                $description = "LIBER is a new journey of self-discovery through art and humanity in technology.  Where the form of a laptop remains, it on top features chic and interchangeable form factors to reveal your true colors.";
            } else {
                $description = 'LIBER คือการเดินทางแห่งการค้นพบตัวเองแบบใหม่ผ่านศิลปะและมนุษยธรรมในเทคโนโลยี ที่ที่ฟอร์มของแล็ปท็อปยังคงอยู่ แต่เพิ่มความ chic และ ฟอร์มที่ปรับเปลี่ยนได้เพื่อดึงความเป็นคุณออกมาอย่างชัดเจน';
            }

            break;

        case 'id':
            if ( $language = 'id') {
                $keyword = 'LIBER adalah sebuah perjalanan mencari jati diri melalui seni dan sisi kemanusiaan didalam teknologi, Dalam bentuk sebuah laptop dengan fitur utama yang menawan dan dapat diganti demi menunjukan siapa sesungguhnya diri kita.';
                break;
            }
    }

    return $description;

}


function googleAnalyticCode( $country ) {

    switch ( $country ) {
        case 'bd' : return "UA-128035503-8";

    }


    return 'UA-106387992-1';    // Default


}
function GoogleMap( $key ) {

    return 'AIzaSyCios_R1Rq6u6B_k63v_6L0br2iXR3GaFw';    // Default

}
function BaiduMap( $key ) {

    return '123';    // Default

}
