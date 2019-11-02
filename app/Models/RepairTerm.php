<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepairTerm extends Model
{
    use CountrySupport;

    protected $fillable = ['locale', 'message', 'title', 'country'];

    public function localeText( ) {
        return array_get( config('languages'), $this->locale ) ?: "Unknown";
    }

}
