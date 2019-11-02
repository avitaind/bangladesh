<?php

namespace App\Http\Controllers;

use App\ASPAPIService;
use App\Country;
use App\ProductModel;
use App\ProductType;
use App\Product;
use App\User;
use App\ProductRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;
use Hash;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function showProfile(){

        $countries = Country::all()->mapWithKeys(function( $item ) {
            return [ $item['code'] =>  $item->name() ];
        })->toArray();

        $user = \Auth::user();

        $genders = [ 'm' => \Lang::get('site.gender_m'), 'f' => \Lang::get('site.gender_f')];

        return view('member.profile', compact('user', 'countries', 'genders'));
    }

    public function handleUpdateDetails(Request $request) {

        $this->validate($request, [
            'name' => "required",
            'birthday' => 'nullable|date|after:1000-01-01',
        ]);

        $user = \Auth::user();

        $user->update( $request->all());

        // TODO: Update User data.
        return redirect(route('member.profile'))->with('status', 'Profile Updated');
    }

    public function showProductRegForm(Request $request) {

        return view('member.product_reg_form');
    }

    public function handleProductRegistration(Request $request){

        $validator = Validator::make($request->all(), [
            'serial_num'    => 'required|string|max:255',
            'product_type'  => 'required|integer',
            'product_model' => 'required|string',
            'purchase_from' => 'required|string|max:255',
            'purchase_date' => 'required|date|after:1000-01-01',
        ])->after(function ($validator) use ($request) {

            $sn_result = ASPAPIService::checkSerialNumberAvailable( $request->get('serial_num') );

            if ( !$sn_result['exists'] ) {
                $validator->errors()->add('serial_num', 'The serial number is not found.');
            }

            if ( !$sn_result['can_register'] ) {
                $validator->errors()->add('serial_num', 'The serial number has been registered.');
            }
        });

        $this->validateWith( $validator );

        $result = ASPAPIService::submitProductRegistration(
            \Auth::user(),
            $request->get('serial_num'),
            $request->get('product_model'),
            $request->get('purchase_from'),
            $request->get('purchase_date')
        );

        $expiration_timestamp = array_get($result, 'expiration_date');

//        dd( $result );

        $model_number = array_get($result, 'model_number');

        if ( $expiration_timestamp ) {

            $registration                   = new ProductRegistration( $request->all() );
            $registration->model_description = $model_number;
            $registration->basic_month      = array_get($result, 'basic_month');
            $registration->extra_month      = array_get($result, 'extra_month');
            $registration->user_id          = \Auth::user()->id;
            // Calculate Expire Date
            $registration->warranty_expire_date = Carbon::createFromTimestamp($expiration_timestamp);

            return redirect('/member/product_reg_success')->with('registration', $registration);
        }

    }

    public function success(){
        return view('member.success');
    }

    public function showProduct_reg_success(Request $request){

        $registration = $request->session()->get('registration');

        if ( $registration == null ) {
            return redirect(route('member.product_list'));
        }
        
        return view('member.product_reg_success', compact('registration'));
    }

    public function showChangePasswordForm(){
        return view('member.change_password');
    }

    public function handleChangePasswordForm(Request $request){
        $user = \Auth::user();
        //dd($request);
        $validator = Validator::make($request->all(), [
            'origin_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
            'new_password_confirmation' => 'required|same:new_password'
        ]);

        $validator->after(function($validator) use ($request, $user) {
            // dd($request);
            if( !Hash::check($request->get('origin_password'), $user->password) ){
                $validator->errors()->add('origin_password', 'The current password does not correct.');
            }
        });

        if ( $validator->fails()){
            return redirect()->back()->withErrors( $validator );
        }


        $user->password = Hash::make( $request->get('new_password') );
        $user->update();

        // alert('Password changed');

        return redirect(route('member.profile'));
    }

    public function showProductList() {
        $user = \Auth::user();

        $json_data = ASPAPIService::getMyRegisteredProducts( $user );

        $products = array();

        foreach ( $json_data as $json ) {

            $product = new \stdClass();
            $product->serial_num = $json['serial_number'];
            $product->purchase_date = $json['purchase_date'];
            $product->expiration_date = $json['expiration_date'];
            $product->purchase_from = $json['purchase_from'];
            $product->model_number = $json['model_number'];
            $product->product_name = $json['model_name'];
            $products[] = $product;
        }

        return view('member.product_list', compact('products'));
    }
}
