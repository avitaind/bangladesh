<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    //

    protected $fillable = ['name', 'value'];

    public static function get( $settingName ) {

        $setting = self::where('name', $settingName)->first();

        if ( $setting ){
            return $setting->value;
        } else {
            return null;
        }
    }

    public static function set( $settingName, $settingValue = null ) {

        $setting = self::firstOrNew(['name' => $settingName]);
        $setting->value = $settingValue;
        $setting->save();
    }
}
