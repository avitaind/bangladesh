<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use Translatable;
    //
    protected $fillable = ['phone', 'country', 'region', 'latitude', 'longitude',
        'name:tc', 'address:tc',
        'name:sc', 'address:sc',
        'name:en', 'address:en',
        'name:th', 'address:th',
        'name:id', 'address:id',
        'name:vn', 'address:vn',
        ];
    public $translatedAttributes = ['name', 'address'];


    public function countryString( ) {
        return config('constants.countries.'.$this->country, "");
    }

}

class ShopTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'address'];
}
