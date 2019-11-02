<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class WarrantyTerm extends Model
{
    use Translatable;

    public $fillable = ['title', 'message:tc', 'message:en', 'message:sc', 'message:th', 'message:vn', 'message:id'];

    public $translatedAttributes = ['message'];
}

class WarrantyTermTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['message'];

}