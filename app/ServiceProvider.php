<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceProvider extends Model
{
    //
    protected $fillable = ['name', 'access_key', 'enabled'];

    protected $casts = [
        'enabled' => 'boolean'
    ];


}
