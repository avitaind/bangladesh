<?php

namespace App\Http\Controllers;

use Auth;
use App\ProductModel;
use App\ServiceCenter;
use App\Subscription;
use App\Mailers\AppMailer;
use Illuminate\Http\Request;
use Alert;


class HomeController extends Controller
{

    public function redirectToHome( ) {

        return view('home');
    }


    public function getHome(){
        $country = 'bd';
        $supported_countries = array_keys( config('constants.countries') );

        if (in_array($country, $supported_countries)) {
            return view('home');
        } else {

            // unset country
            session(['country' => null]);
            return redirect()->to('/');
        }


    }

    public function getTerms( ){

        $locale = app()->getLocale();

        if ( $locale == 'id' ) {
            $view_name = 'pages.terms_and_conditions_id';
        } elseif ( $locale == 'th')  {
            $view_name = 'pages.terms_and_conditions_thai';
        } else {
            $view_name = 'pages.terms_and_conditions';
        }

        return view($view_name);
    }

    public function getAboutUs( ) {
        return view('pages.about_us');
    }

    public function getSupport( ){
        $country = 'bd';

        $productModels = ProductModel::all();
        $serviceCenters = ServiceCenter::whereCountry($country)->get();


        if ( \App::isLocale('en') ) {
            $query = ServiceCenter::select('service_centers.*')->leftJoin('service_center_translations', function ($join) {
                $join->on('service_centers.id', '=', 'service_center_translations.service_center_id');
                $join->on('service_center_translations.locale', '=', \DB::raw('"en"') );
            })
            ->orderBy('service_center_translations.name', 'ASC');

        } else {
            $query = ServiceCenter::select();
        }

        $query->where('country', $country);
        $centers = $query->get();
        //dd( $shops );
    
           // return view('product.map', compact( 'product', 'shops'));

        return view('pages.support', compact('productModels', 'centers'));
    }

    public function handleSupportRedirect(Request $request) {
        $this->validate($request, [
            'product_number'   => 'required',
//            'product_model'  => 'required',
            'type'             => 'required',
            'series'           => 'required',
            'marketing_number' => 'required',
        ]);

        $product_model = $request->get('product_model');

        $product_number = $request->get('product_number');
        $product_type = $request->get('type');
        $product_series = $request->get('series');

        // Finding the short code

        $short_code = 'liber';

        $params = ['slug'   => $short_code,
            'model'  => $product_model,
            'pn'     => $product_number,
            'type'   => $product_type,
            'series' => $product_series,
            'marketing_number' => $request->get('marketing_number')];

        return redirect()->route('product.support', $params);
    }

    public function getSearch_result( ){
        return view('pages.search_result');
    }

    public function showCountrySelections( ){
        return view('pages.global');
    }

    public function getContact_us( ){

        // Determine which contact_us page by region

        $country_code = session('country', 'bd');

        $view_name = 'pages.contact_us_'.$country_code;

        if ( !\View::exists($view_name) ) {
            $view_name = 'pages.contact_us';
        }

        return view( $view_name );

    }

    public function getPromotionVanillaAir( ) {
        return view('pages.promotion_vanilla_air');
    }

    public function getRepairTerms( ){

        $title = __('site.footer_repair_tnc');
        /*
                $content =  null;

                $country = session('country');
                $locale = \App::getLocale();
                $repair_term = RepairTerm::whereLocale($locale)->whereCountry($country)->first();

                if ( $repair_term ){
                    return view('pages.terms', ['title' => $title, 'content' => $repair_term->message ]);
                } else {
                    return view('pages.terms', ['title' => $title, 'content' => 'Content not found.']);
                }
            */
        return view('pages.repair_tnc', ['title' => $title]);




    }

    public function handleSubscription(Request $request, AppMailer $mailer) {
        $this->validate($request, ['subscription_email' => 'required|email']);
        $email = $request->get('subscription_email');
        // Store to DB.
        $subscription = Subscription::firstOrCreate(['email' => $email]);
        // $sub = new SendInMail;
        // $sub->createUser($email);
        // $data = [
        //     'status' => 'success',
        //     'message' => 'Thank you for your subscription!'
        // ];
        // return response( $data );
           
        $subscription->save();
        // $mailer->sendSubscriberInformation(Auth::user(), $subscription);
        return redirect()->back()->with("status", "Thanks for Subscribing, We will connect you shortly.");

    }

    public function getImago(Request $request) {
        return view('product.imago');
    }

    public function getImagoSpec(Request $request){
        return view('product.imago_spec');
    }

    public function getModus() {
        return view('product.modus');
    }
}