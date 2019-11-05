<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    use CountrySupport;

    //
    protected $fillable = ['short_code', 'warranty_term_id', 'product_type_id',
        'name_en', 'name_tc', 'name_sc', 'spec_view', 'feature_view', 'extra_warranty', 'country'];

    public function warrantyTerm( ){
        return $this->belongsTo(WarrantyTerm::class);
    }

    public function faqs( ) {
        return $this->belongsToMany(Faq::class);
    }

    public function productType(){
        return $this->belongsTo(ProductType::class);
    }

    public function productModels( ){
        return $this->hasMany(ProductModel::class);
    }

    public function getFeatureView( ) {
        
        return $this->getLocalizedView( $this->feature_view );
    }

    public function getSpecView( ){
        return $this->getLocalizedView( $this->spec_view );
    }

    protected function getLocalizedView( $view ){

        $locale = app()->getLocale();

        $view_names = [
            "product.{$view}_{$locale}",
            "product.{$view}",    // Fallback view
        ];

        foreach ( $view_names as $view_name ) {
            if (\View::exists($view_name) ){
                return $view_name;
            }
        }

        return null;

    }

}
