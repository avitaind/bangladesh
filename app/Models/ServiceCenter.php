<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ServiceCenter extends Model
{
    use Translatable;
    use CountrySupport;

    protected $fillable = ['latitude', 'longitude',  'country',
        'name:tc', 'address:tc', 'opening_hour:tc', 'phone:tc', 'fax:tc', 'email:tc',
        'name:sc', 'address:sc', 'opening_hour:sc', 'phone:sc', 'fax:sc', 'email:sc',
        'name:en', 'address:en', 'opening_hour:en', 'phone:en', 'fax:en', 'email:en',
        'name:th', 'address:th', 'opening_hour:th', 'phone:th', 'fax:th', 'email:th',
        'name:vn', 'address:vn', 'opening_hour:vn', 'phone:vn', 'fax:vn', 'email:vn',
        'name:id', 'address:id', 'opening_hour:id', 'phone:id', 'fax:id', 'email:id',];

    public $translatedAttributes = ['name', 'address', 'opening_hour', 'phone', 'fax', 'email'];


}

class ServiceCenterTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'address', 'opening_hour', 'phone', 'fax', 'email'];
}