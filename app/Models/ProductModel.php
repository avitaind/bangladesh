<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $fillable = ['model_number', 'product_id', 'name_en', 'name_tc', 'name_sc'];

    public function productType() {
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    public function name() {
        return $this->name_tc;
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
