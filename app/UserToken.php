<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserToken extends Model
{
    protected $fillable = ['user_id', 'application', 'token', 'expire_date'];

    public $dates = ['expire_date'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
