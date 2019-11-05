<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRegistration extends Model
{
    //
    protected $fillable = ['user_id', 'product_model_id', 'serial_num', 'purchase_from', 'purchase_date', 'warranty_expire_date'];
    protected $dates = ['purchase_date', 'warranty_expire_date'];

    public function owner( ){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function productModel( ){
        return $this->belongsTo(ProductModel::class, 'product_model_id');
    }
}
