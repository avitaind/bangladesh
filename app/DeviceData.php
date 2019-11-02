<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeviceData extends Model
{
    //
    protected $fillable = ['user_id', 'device_code', 'data', 'record_time'];

    protected $dates = ['record_time'];

    protected $casts = [
        'data' => 'json'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getDeviceValue( $key ){
        return array_get( $this->data, $key);
    }

    public function to_excel_row( ) {

        if ( $this->device_code == 'scale') {

            return [
                $this->record_time->format("Y-m-d H:i"),
                $this->getDeviceValue('body_weight'),
                $this->getDeviceValue('water_rate'),
                $this->getDeviceValue('muscle_rate'),
                $this->getDeviceValue('subcutaneous_fat_rate'),
                $this->getDeviceValue('visceral_fat_level'),
                $this->getDeviceValue('basic_metabolism'),
                $this->getDeviceValue('bond_weight'),
                $this->getDeviceValue('fat_rate'),
                $this->getDeviceValue('protein'),
            ];

        } else if ($this->device_code == 'sleepband') {

            return [
                $this->record_time->format("Y-m-d H:i"),
                $this->getDeviceValue('start_time'),
                $this->getDeviceValue('end_time'),
                $this->getDeviceValue('wake_duration'),
                $this->getDeviceValue('light_sleep_duration'),
                $this->getDeviceValue('sleep_duration'),
                $this->getDeviceValue('deep_sleep_duration'),
                $this->getDeviceValue('fall_sleep_duration'),
                $this->getDeviceValue('turnover_times'),
                $this->getDeviceValue('score'),
                $this->getDeviceValue('sleep_data'),
                $this->getDeviceValue('breath_data'),
                $this->getDeviceValue('heart_rate_data'),
            ];

        }

        return array();


    }

}
