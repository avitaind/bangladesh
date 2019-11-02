<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 24/1/2018
 * Time: 6:48 PM
 */

namespace App;

use Carbon\Carbon;
use GuzzleHttp\Client as HttpClient;


class DeviceDataManager
{



    public function fetchScaleData( $email, Carbon $start_date, Carbon $end_date = null) {

        $raw_datas = $this->fetchRawData( $email, '3', $start_date, $end_date);

        $convert = function( $raw ) {

            return [
                'record_time'           => array_get($raw, 'createTime'),
                'body_weight'           => array_get($raw, 'value1'),
                'water_rate'            => array_get($raw, 'value2'),
                'muscle_rate'           => array_get($raw, 'value3'),
                'subcutaneous_fat_rate' => array_get($raw, 'value4'),
                'visceral_fat_level'    => array_get($raw, 'value5'),
                'basic_metabolism'      => array_get($raw, 'value6'),
                'bond_weight'           => array_get($raw, 'value7'),
                'fat_rate'              => array_get($raw, 'value8'),
                'protein'               => array_get($raw, 'value9'),
            ];

        };

        return array_map( $convert, $raw_datas);
    }

    public function fetchSleepbandData($email, Carbon $start_date, Carbon $end_date = null ){

        $raw_datas = $this->fetchRawData( $email, '6', $start_date, $end_date);

        $convert = function( $raw ) {

            return [
                'record_time'          => $raw['createTime'],
                'start_time'           => array_get($raw, 'value1'),
                'end_time'             => array_get($raw, 'value2'),
                'wake_duration'        => array_get($raw, 'value3'),
                'light_sleep_duration' => array_get($raw, 'value4'),
                'sleep_duration'       => array_get($raw, 'value5'),
                'deep_sleep_duration'  => array_get($raw, 'value6'),
                'fall_sleep_duration'  => array_get($raw, 'value7'),
                'turnover_times'       => array_get($raw, 'value8'),
                'score'                => array_get($raw, 'value9'),
                'sleep_data'           => array_get($raw, 'value10'),
                'breath_data'          => array_get($raw, 'value11'),
                'heart_rate_data'      => array_get($raw, 'value12'),
            ];

        };

        return array_map( $convert, $raw_datas);
    }





    /**
     * Fetch Raw Device Data from HnT server
     *
     * @param $email
     * @param $device_type int
     * @param Carbon $start_date
     * @param Carbon $end_date
     */
    protected function fetchRawData($email, $device_type, Carbon $start_date, Carbon $end_date = null)
    {

        $client = new HttpClient( );

        $url = 'http://yun.raysgem.com.cn/rj-web/bodydata/readData';

        $query = [
            'startTime' => $start_date->format('Y-m-d'),
            'endTime' => ($end_date) ? $end_date->format('Y-m-d') : $start_date->format('Y-m-d'),
            'type' => $device_type,
            'openId' => $email
        ];

        \Log::info( 'Fetch Raw Data '.$url, $query);

        $response = $client->request('GET', $url, [
            'query' => $query
        ]);

        $data = json_decode($response->getBody(), true);

        return array_get($data, 'data', []);
    }

}