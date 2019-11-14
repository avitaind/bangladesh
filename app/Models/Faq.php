<?php

namespace App;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use Translatable;

    protected $fillable = ['question:tc', 'answer:tc',
        'question:en', 'answer:en',
        'question:sc', 'answer:sc',
        'question:th', 'answer:th',
        'question:vn', 'answer:vn',
        'question:id', 'answer:id', ];

    public $translatedAttributes = ['question', 'answer'];

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}

class FaqTranslation extends Model {

    public $timestamps = false;
    protected $fillable = ['question', 'answer'];

}