<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    //
    protected $fillable = ['name_en', 'name_tc', 'name_sc', 'name_th', 'name_vn', 'name_id'];

    public function productType() {
        return $this->hasMany(ProductModel::class, 'type_id');
    }

    public function name(){

        return $this->name_tc;
    }
}
