<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $fillable = ['name_tc', 'name_sc', 'name_en', 'code'];

    /**
     * Return localized country name
     */
    public function name( ) {

        $locale = app()->getLocale();

        switch ($locale) {
            case 'tc':
                return $this->name_tc;
            case 'sc':
                return $this->name_sc;

            default: return $this->name_en;
        }

    }
}
