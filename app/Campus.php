<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    public $table = 'campus';
    public $fillable = ['name','email','phone','internship','college','fest','position'];
}
