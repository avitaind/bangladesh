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
    //return ['hk', 'sg', 'tw', 'my', 'cn', 'th', 'vn', 'in', 'id', 'ph', 'uk', 'mu'];
	
	return ['mu'];
}

function supported_language( $country ) {

    switch ( $country ) {
        case 'hk':
            return ['en', 'tc'];
        case 'sg':
            return ['en'];
        case 'tw':
            return ['tc'];
        case 'cn':
            return ['sc'];
        case 'ph':
            return ['en'];
        case 'th':
            return ['en', 'th'];
        case 'vn':
            return ['en', /* 'vn' */];
        case 'id':
            return ['en', 'id'];
        case 'in':
            return ['en'];
        case 'uk':
            return ['en'];
	 case 'mu':
            return ['en'];
        default:
            return ['en'];
    }

}

function facebookLinkForCountry( $country ) {

    switch ( $country ) {
        case 'hk':  return "https://www.facebook.com/AVITAHongKong/";
        case 'sg':  return "https://www.facebook.com/AvitaSG/";
        case 'tw':  return "https://www.facebook.com/AVITATaiwan/";
        case 'th':  return 'https://www.facebook.com/AvitaTH/';
        case 'in':  return 'https://www.facebook.com/AvitaIndia/';
        case 'cn':
        case 'ph':
        case 'vn':
        case 'id':
        case 'uk':
        case 'mu': return 'https://www.facebook.com/AVITAMau/';
        default:    return "";
    }
}

function instagramLinkForCountry( $country ) {

    switch ( $country ) {
        case 'hk':  return "https://www.instagram.com/avitahongkong/";
        case 'sg':  return "https://www.instagram.com/avitasingapore/";
        case 'tw':  return "https://www.instagram.com/avita_taiwan/";
        case 'th':  return 'https://www.instagram.com/avitathailand/';
        case 'in':  return 'https://www.instagram.com/avitaind/';
        case 'cn':
        case 'ph':
        case 'vn':
        case 'id':
        case 'uk':
        case 'mu':  return 'https://www.instagram.com/avitamauritius/';
        default:    return "";
    }
}

function twitterLinkForCountry( $country ) {

    switch ( $country ) {
        case 'in':  return 'https://twitter.com/AvitaIndia';
        case 'hk':
        case 'sg':
        case 'tw':
        case 'th':
        case 'cn':
        case 'ph':
        case 'vn':
        case 'id':
        case 'uk':
        case 'mu': return 'https://twitter.com/AvitaMauritius';
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
        case 'id' : return "UA-128035503-8";
        case 'ph' : return "UA-128035503-9";
        case 'vn' : return 'UA-128035503-7';
        case 'cn' : return 'UA-128035503-10';
        case 'in' : return 'UA-128035503-6';
        case 'my' : return 'UA-128035503-3';
        case 'sg' : return 'UA-128035503-5';
        case 'tw' : return 'UA-128035503-4';
        case 'th' : return 'UA-128035503-11';

    }


    return 'UA-106387992-1';    // Default


}
function GoogleMap( $key ) {

    return 'AIzaSyDkjCWGYO6wojvQEwcNm09P_H7XeYoji9I';    // Default

}
function BaiduMap( $key ) {

    return '123';    // Default

}
