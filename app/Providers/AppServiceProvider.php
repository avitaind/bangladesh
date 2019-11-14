<?php

namespace App\Providers;

use App\Shop;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
     Schema::defaultStringLength(191); 
        \View::composer(['partials.product-navbar', 'partials.header', 'partials.footer'], function ($view) {

            $country = session('country');
            $shop_count = Shop::whereCountry($country)->whereEnabled(true)->count();
            $view->with('shop_count', $shop_count);
        });

        \View::composer(['partials.header', 'partials.footer'], function($view) {

            $country = session('country');
            $lang = app()->getLocale();

            $storeURL = null;


            switch ( $country ) {

                case 'hk':

                    if ($lang == 'tc') {
                        $storeURL = "https://www.nexstmall.com/zh_hk/avita.html?utm_source=brandsite_zh&utm_medium=mainmenu&utm_campaign=brandsite";
                    } else {
                        $storeURL = "https://www.nexstmall.com/en_hk/avita.html?utm_source=brandsite_en&utm_medium=mainmenu&utm_campaign=brandsite";
                    }
                    break;

                case 'sg':
                    $storeURL = "https://www.hachi.tech/pc-go/notebooks-desktops/notebooks-laptops?q=&hPP=48&idx=instant_product_listing_from&p=0&dFR%5Bbrand%5D%5B0%5D=AVITA&fR%5Bboutiquecates.subcategory%5D%5B0%5D=PC%20GO%20%3E%20NOTEBOOKS%20%26%20DESKTOPS%20%3E%20Notebooks%20%26%20Laptops&is_v=1";
                    break;
                case 'cn':
                    $storeURL = "https://avita.jd.com";
                    break;
                case 'id':

                    $storeURL = "http://www.jd.id/campaign/avita-liber-series-3162.html";
                    break;
                case 'th':
                    $storeURL = "https://www.bnn.in.th/catalogsearch/result/?___store=en&q=avita&cat=";
                    break;
					
            }

            $view->with('storeURL', $storeURL);


        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
