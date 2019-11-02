<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 27/11/2017
 * Time: 4:56 PM
 */

namespace App;


trait CountrySupport
{

    public function countryString( ) {
        return config('constants.countries.'.$this->country, "");
    }
}