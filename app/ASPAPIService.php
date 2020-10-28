<?php

namespace App;

use GuzzleHttp\Client as HttpClient;

class ASPAPIService
{

    protected static $brand = 'avita';

    protected static function asp_url( ) {
       // return env('ASP_URL', 'http://avita_asp.dev');
        return env('ASP_URL', 'https://asp.avita.global/');

    }

    protected static function getClient() {

        $base_url = self::asp_url();
        $client = new HttpClient( ['base_uri' => $base_url]);

        return $client;
    }


    public static function updateUserInfo( User $user ) {

        $client = self::getClient();

        $jsonData = [
            'name'      => $user->name,
            'email'     => $user->email,
            'country'   => $user->country,
            'birthday'  => ( $user->birthday ) ? $user->birthday->format('Y-m-d') : null,
            'full_name' => $user->first_name.' '.$user->last_name,
            'gender'    => $user->gender,
            'address'   => $user->address,
            'tel'     => $user->phone,
            'mobile'    => $user->mobile,
        ];

        $res = $client->request('POST', '/api/customer', [
            'headers' => ['Accept' => 'application/json',],
            'json' => $jsonData
        ]);

        $json = json_decode( $res->getBody()->getContents(), true);

    }

    public static function submitProductRegistration( User $user, $serial_number, $model_number, $reseller_name, $purchase_date  ) {

        $client = self::getClient();

        $jsonData = [
            'serial_number'    => $serial_number,
            'model_number'     => $model_number,
            'purchase_from'    => $reseller_name,
            'purchase_date'    => $purchase_date,
            'customer_name'    => $user->name,
            'customer_fullname' => $user->first_name . ' ' . $user->last_name,
            'customer_email'    => $user->email,
            'customer_mobile'  => $user->mobile,
            'customer_tel'     => $user->phone,
            'customer_address' => $user->address,
            'customer_country' => $user->country,
            'customer_zone'    => self::$brand,
        ];


        $res = $client->request('POST', '/api/customer/product', [
            'headers' => ['Accept' => 'application/json',],
            'json'    => $jsonData
        ]);

        $json = json_decode( $res->getBody()->getContents(), true);

        return $json;
    }

    public static function checkSerialNumberAvailable( $serial_num ){


        $client = self::getClient();

        $res = $client->request('GET', '/api/sn/check', [
            'headers' => ['Accept' => 'application/json'],
            'query' => ['serial_number' => $serial_num ],
        ]);

        $json = json_decode( $res->getBody()->getContents(), true);

        return $json;
    }

    public static function getDriversForProductNumber($product_number) {

        $client = self::getClient();

        $url = "/api/drivers?product_number=".$product_number;

        try{
            $res = $client->get($url);
            $json = json_decode( $res->getBody()->getContents(), true);
            $drivers = array_get( $json, 'drivers' );
            return collect( $drivers )->groupBy('category');
        } catch ( \Exception $e ) {
            return collect( );
        }

    }

    public static function getDriversForModelNumber( $model_number ) {

        $client = self::getClient();

        $url = "/api/drivers?model_number=".$model_number;

        try{
            $res = $client->get($url);
            $json = json_decode( $res->getBody()->getContents(), true);
            $drivers = array_get( $json, 'drivers' );
            return collect( $drivers )->groupBy('category');
        } catch ( \Exception $e ) {
            return collect( );
        }
    }

    public static function getMyRegisteredProducts( User $user ) {

        $client = self::getClient();
        $url = "/api/customer/my-product";


//        try {

            $jsonData = [
                'email' => $user->email,
                'zone' => self::$brand
            ];

            $res = $client->post($url, [
                'headers' => ['Accept' => 'application/json'],
                'json' => $jsonData
            ]);

            $json = json_decode( $res->getBody()->getContents(), true);
            return $json;
//        } catch ( \Exception $e ) {
//
//
//            return collect( );
//        }


    }

    public static function getProductTypes( ) {

        $client = self::getClient();
        $jsonData = [

        ];

        $res = $client->get('/api/product/types');

        $product_types = json_decode( $res->getBody()->getContents(), true);

        return $product_types;
    }

    public static function getProductSeries($type) {


        $client = self::getClient();
        $jsonData = [
            'country' => session('country', 'in'),
            'brand' => self::$brand,
            'type' => $type
        ];

        $res = $client->get('/api/product/product-series', [
            'json' => $jsonData
        ]);

        $product_types = json_decode( $res->getBody()->getContents(), true);

        return $product_types;

    }

    public static function getProductMarketingNumbersBySeries($series) {

        $client = self::getClient();
        $jsonData = [
            'country' => session('country', 'in'),
            'brand' => self::$brand,
            'series' => $series
        ];

        $res = $client->get('/api/product/marketing-numbers', [
            'json' => $jsonData
        ]);

        $marketing_numbers = json_decode( $res->getBody()->getContents(), true);

        return $marketing_numbers;

    }

    public static function getProductNumbersByMarketingNumber($marketing_number) {

        $client = self::getClient();
        $jsonData = [
            'country' => session('country', 'in'),
            'brand' => self::$brand,
            'marketing_number' => $marketing_number
        ];

        $res = $client->get('/api/product/product-numbers', [
            'json' => $jsonData
        ]);

        $product_types = json_decode( $res->getBody()->getContents(), true);

        return $product_types;
    }

    public static function getProductNumbersByProductSeries($product_series) {

        $client = self::getClient();
        $jsonData = [
            'country' => session('country', 'in'),
            'brand' => self::$brand,
            'series' => $product_series
        ];

        $res = $client->get('/api/product/product-numbers', [
            'json' => $jsonData
        ]);

        $product_types = json_decode( $res->getBody()->getContents(), true);

        return $product_types;

    }

    /**
     * Get Product Models by product number OR marketing number
     * @param $product_number
     * @param $marketing_number
     */
    public static function getProductModels( $product_number, $marketing_number ) {

        $client = self::getClient();
        $jsonData = [
            'country' => session('country', 'in'),
            'brand' => self::$brand,
            'product_number' => $product_number,
            'marketing_number' => $marketing_number
        ];

        $res = $client->get('/api/product/product-models', [
            'json' => $jsonData
        ]);

        $result = json_decode( $res->getBody()->getContents(), true);

        return $result;

    }

}