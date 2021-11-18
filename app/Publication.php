<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Laracasts\Presenter\PresentableTrait;
use Laracasts\Presenter\Presenter;

class Publication extends Model
{
    //
    use PresentableTrait;

    // protected $presenter = 'App\NewsPresenter';
     //

    protected $fillable = [
        'title','caption','image_path','is_publish','url','publication','published_date'
    ];

}
