<?php

namespace App\Http\Controllers;

use App\ASPAPIService;
use App\Product;
use App\ProductModel;
use App\Shop;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

    protected function productFromURL( $country, $slug ) {
        $country = 'bd';
        $product = Product::whereCountry($country)->where('short_code', $slug)->first();

        // Fallback..
        if ( !$product ) {
            $product = Product::where('short_code', $slug)->first();
        }
       
        return $product;
    }

    public function showProductFeatures($slug) {
        $country = 'bd';
        $product = $this->productFromURL($country, $slug);

        if ( $slug == 'admiror' ){

            switch ( $country ) {
                case 'bd':
                        return view('product.admiror.feature_hk_en', compact( 'product'));
                         break;

            }
        }
        if ( $slug == 'liber-v' ){

            switch ( $country ) {
                case 'bd':
                    return view('product.liber-v.feature_hk_en', compact( 'product'));
                    break;

            }
        }
        if ( $slug == 'liber-v-amd' ){

            switch ( $country ) {
                case 'bd':
                    return view('product.liber-v.amd.feature_hk_en', compact( 'product'));
                    break;

            }
        }
        if ( $slug == 'essential' ){  
			
			switch ( $country ) {
				case 'bd':  
                        return view('product.essential.feature_hk_en', compact( 'product')); 
                        break;
                    }
                }

        if ( $slug == 'pura' ){

            switch ( $country ) {
                case 'bd':
                    return view('product.pura.feature_hk_en', compact( 'product'));

                    break;

            }
        }

        if ( $slug == 'pura-amd' ){

            switch ( $country ) {
                case 'bd':
                    return view('product.pura.amd.feature_hk_en', compact( 'product'));

                    break;

            }
        }

        if ( $slug == 'liber-v-gold' ){

            switch ( $country ) {
                case 'bd':
                    return view('product.liber-v-gold.feature_hk_en', compact( 'product'));
                    break;

            }
        }
        if ( $slug == 'liber-v-gold-black' ){

            switch ( $country ) {
                case 'bd':
                    return view('product.liber-v-gold.feature_hk_black_en', compact( 'product'));
                    break;

            }
        }
        if ( $slug == 'liber-v-gold-blue' ){

            switch ( $country ) {
                case 'bd':
                    return view('product.liber-v-gold.feature_hk_blue_en', compact( 'product'));
                    break;

            }
        }
        
        if ( $slug == 'liber-new-generation' ){

            switch ( $country ) {
                case 'bd':
                        return view('product.liber-u-series.feature', compact( 'product'));
                         break;

            }
        }


        if ( $slug == 'magus12-2in1-laptop' ) {
            if ( $country == 'sg' ) {
                return view('product.magus_sg', compact( 'product'));
            } elseif ( $country == 'id' ) {
                return view('product.magus_id', compact( 'product'));
            } else {
                return view('product.magus', compact( 'product'));
            }
        }
        if ( $slug == 'magus12-2in1-laptop-c' ) {
            return view('product.magus_tc', compact( 'product'));
        }
        if ( $slug == 'magus-spec' ) {
            if ( $country == 'id' ) {
                return view('product.magus_spec_id', compact( 'product'));
            } else {
                return view('product.magus_spec_hk', compact( 'product'));
            }
        }
        if ( $slug == 'magus-spec-c' ) {
            return view('product.magus_spec_tc', compact( 'product'));
        }
        if ( !$product ) {
            abort(404);
        }

        $view = $product->getFeatureView( );

        if (!$view){
            abort(404);
        }
        if ( $country == 'ph' ) {
            return view('product.liber_feature_ph', compact( 'product'));
        } else {
            return view($view, compact('product'));
        }



    }

    public function showProductSpec( $slug) {
        $country = 'bd';
        $product = $this->productFromURL($country, $slug);

        $lang = app()->getLocale();


        if ( $slug == 'essential' ){  
			
			switch ( $country ) {
				case 'bd': 
                        return view('product.essential.spec_hk_en', compact( 'product')); 
                        break;
					}
                } 


        if ( $slug == 'liber-v' ){
                    switch ( $country ) {
                        case 'bd':
                            return view('product.liber-v.spec_hk_en', compact( 'product'));
                            break;
                    }
                }

                if ( $slug == 'liber-v-amd' ){
                    switch ( $country ) {
                        case 'bd':
                            return view('product.liber-v.amd.spec_hk_en', compact( 'product'));
                            break;
                    }
                }

                if ( $slug == 'liber-v-gold' ){
                    switch ( $country ) {
                        case 'bd':
                            return view('product.liber-v-gold.spec_hk_en', compact( 'product'));
        
                            break;
                    }
                }
                
        if ( $slug == 'admiror' ){
            switch ( $country ) {
                case 'bd':
                      return view('product.admiror.spec_hk_en', compact( 'product'));

                    break;
            }
        }

        if ( $slug == 'pura' ){
            switch ( $country ) {
                case 'bd':
                        return view('product.pura.spec_hk_en', compact( 'product'));

            }
        }

        if ( $slug == 'pura-amd' ){
            switch ( $country ) {
                case 'bd':
                        return view('product.pura.amd.spec_hk_en', compact( 'product'));

            }
        }

        if ( !$product ) {
            abort(404);
        }

        $view = $product->getSpecView( );

        if (!$view){
            abort(404);
        }
        if ( $country == 'ph' ) {
            return view('product.liber_spec_ph', compact( 'product'));
        } else {
            return view($view, compact('product'));
        }
    }

    public function showProductSupport(Request $request, $slug) {
        $country = 'bd';
        $product = $this->productFromURL($country, $slug);

        if ( !$product ) {
            abort(404);
        }

//        $product_model = $request->get('model');
//        $product_number =
//        $product_type = $request->get('type');
//        $product_series = $request->get('series');

        $json_data = [
            'product_model' =>  $request->get('model'),
            'product_number' => $request->get('pn'),
            'product_type' => $request->get('type'),
            'product_series' => $request->get('series'),
            'marketing_number' => $request->get('marketing_number')
        ];

        return view('product.support', compact('product', 'slug', 'json_data'));
    }

  /*  public function whereToBuy($slug){
        $country = 'bd';
        $product = Product::where('short_code', $slug)->first();

        if ( $slug == 'admiror' || $slug == 'pura' ){

            $product = Product::where('short_code', 'liber')->first();

        }


        if ( !$product ) {
            abort(404);
        }

        if ( \App::isLocale('en') ) {
            $query = Shop::select('shops.*')->leftJoin('shop_translations', function ($join) {
                $join->on('shops.id', '=', 'shop_translations.shop_id');
                $join->on('shop_translations.locale', '=', \DB::raw('"en"') );
            })
                ->orderBy('shop_translations.name', 'asc');

        } else {
            $query = Shop::select();
        }
        $query->where('country', $country);

        $query->where('enabled', true);

        $shops = $query->get();

//        dd( $shops );

        if ( $country == 'cn' ) {
            return view('product.baidu_map', compact( 'product', 'shops'));
        } else {
            return view('product.map', compact( 'product', 'shops'));
        }


    }
    */

    public function whereToBuy(){
        $country = 'bd';
        $product = Product::select();
      
        if ( !$product ) {
            abort(404);
        }
        if ( \App::isLocale('en') ) {
            $query = Shop::select('shops.*')->leftJoin('shop_translations', function ($join) {
                $join->on('shops.id', '=', 'shop_translations.shop_id');
                $join->on('shop_translations.locale', '=', \DB::raw('"en"') );
            })
            ->orderBy('shop_translations.name', 'ASC');

        } else {
            $query = Shop::select();
        }
        $query->where('country', $country);
        $query->where('enabled', true);
        $shops = $query->get();
        //dd( $shops );
    
            return view('product.map', compact( 'product', 'shops'));
    
    }
    
    
 
    public function showDriverComponent(Request $request) {

        $product_number = $request->get('product_number');

        // Get drivers list from asp server.
        $all_drivers = ASPAPIService::getDriversForModelNumber($product_number);

        $total = $all_drivers->reduce(function ( $carry, $item ) {
            return $carry + count( $item );
        });

        if ( !$total ) {
            $total = 0;
        }

        return view('product.drivers', compact('all_drivers', 'total'));
    }

    public function showProductTypes(Request $request) {
        return ASPAPIService::getProductTypes( );
    }

    public function showProductSeries(Request $request) {

        $type = $request->get('type');
        return ASPAPIService::getProductSeries($type);

    }

    public function showProductMarketingNumbers(Request $request) {
        $series = $request->get('series');
        return ASPAPIService::getProductMarketingNumbersBySeries($series);
    }

    public function showProductNumbers(Request $request) {

        if ( $request->has('marketing_number' ) ) {
            return ASPAPIService::getProductNumbersByMarketingNumber( $request->get('marketing_number') );
        } else {
            return ASPAPIService::getProductNumbersByProductSeries( $request->get('series') );
        }
      
    }

    public static function showProductModels(Request $request) {

        return ASPAPIService::getProductModels( $request->get('product_number'), $request->get('marketing_number'));

    }

}
