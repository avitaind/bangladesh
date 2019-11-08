<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@redirectToHome');

Route::get('/lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('/country/{country}', ['as' => 'country.switch', 'uses' => 'CountryController@switchCountry']);

// Global URLs.

Route::get('/entry', 'HomeController@showCountrySelections')->name('country.picker');
Route::get('/aboutus', 'HomeController@getAboutUs');
Route::get('/contact_us', 'HomeController@getContact_us');
Route::get('/tnc', 'HomeController@getTerms');

// Route::get('/imago', 'HomeController@getImago')->name('imago');
// Route::get('/imago/spec', 'HomeController@getImagoSpec')->name('imago.spec');
// Route::get('/modus', 'HomeController@getModus')->name('modus');

//redirect to https://avita-americas.com/
Route::get('/us', function(){
    return redirect('https://avita-americas.com/');
});

Route::get('/accessories/mouse', function(){
    return view('product.mouse');
});


// User Login
Route::get('/member/profile', 'MemberController@showProfile')->middleware(['auth'])->name('member.profile');
Route::post('/member/profile', 'MemberController@handleUpdateDetails');
Route::get('/member/change_password', 'MemberController@showChangePasswordForm')->name('member.change_password');
Route::post('/member/change_password', 'MemberController@handleChangePasswordForm')->name('member.change_password');
Route::get('/member/product_list', 'MemberController@showProductList')->name('member.product_list');

Route::get('/member/product_reg', 'MemberController@showProductRegForm')->name('member.product_reg');
Route::post('/member/product_reg', 'MemberController@handleProductRegistration');
Route::get('/member/success', 'MemberController@success');
Route::get('/member/product_reg_success', 'MemberController@showProduct_reg_success');


// EDM subscription
Route::post('subscription', 'HomeController@handleSubscription');


Route::auth();
Route::get('login/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

// ====================================
// API

Route::get('api/drivers', 'ProductsController@showDriverComponent');
Route::get('api/products/types', 'ProductsController@showProductTypes');
Route::get('api/products/series', 'ProductsController@showProductSeries');
Route::get('api/products/marketing_numbers', 'ProductsController@showProductMarketingNumbers');
Route::get('api/products/numbers', 'ProductsController@showProductNumbers');
Route::get('api/products/models', 'ProductsController@showProductModels');

// ====================================
// Mirror Integration
Route::get('auth/login', 'Integration\LoginController@handleLoginRequest');
Route::get('/app/{app_code}/approve',  'Integration\ApplicationController@showApprovalForm')->name('integration.approval');
Route::post('/app/{app_code}/approve',  'Integration\ApplicationController@handleApproval');

if ( Request::segment(1) != 'admin') {

   // Route::group(['prefix' => '{country}',  'middleware' => 'country' ], function() {

        Route::get('/', 'HomeController@redirectToHome');

        // Pages
        Route::get('/repair_tnc', 'HomeController@getRepairTerms')->name('repair_tnc');
        Route::get('/support', 'HomeController@getSupport')->name('support');
        Route::post('/support', 'HomeController@handleSupportRedirect');
        Route::get('/search_result', 'HomeController@getSearch_result');

        // News
        Route::get('/news/{month?}', 'NewsController@showNewsList')->name('news');
        Route::get('/news/detail/{slug}', 'NewsController@showNewsDetail')->name('news.detail');

        // Products
        Route::get('/products', function () {
            return redirect()->route('product.overview', ['liber']);
        } )->name('products');

        Route::get('/product/{slug}', 'ProductsController@showProductFeatures')->name('product.overview');
        Route::get('/product/{slug}/spec', 'ProductsController@showProductSpec')->name('product.spec');
        Route::get('/product/{slug}/support', 'ProductsController@showProductSupport')->name('product.support');
        Route::get('/product/{slug}/where_to_buy', 'ProductsController@whereToBuy')->name('product.map');

    //});

}



// ====================================
// Admin CMS routes
//
Route::group(['prefix' => 'admin', 'namespace' => 'Auth'], function( $route ) {

    // Authentication Routes...
    Route::get('login', 'AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'AdminLoginController@login');
    Route::post('logout', 'AdminLoginController@logout')->name('admin.logout');

    // Password Reset Routes...
    Route::get('password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'AdminResetPasswordController@reset');

});




Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin'],  'namespace' => 'Admin', 'as' => 'admin.'], function ( $route ) {

    Route::get('/', 'HomeController@getHome')->name('home');

    Route::get ('change_password', 'HomeController@showChangePasswordForm');
    Route::post('change_password', 'HomeController@updateChangePasswordForm');

    Route::resource('users', 'UsersController');

    Route::get('device_data_export', 'DeviceDataController@downloadForm');
    Route::post('device_data_export', 'DeviceDataController@handleDownload');

    Route::get('subscriptions', 'SubscriptionsController@showSubcriptionList');
//    Route::get('registrations', 'RegistrationsController@showRegistrationList');

    Route::resource('news', 'NewsController');


    Route::get('export', 'CustomersController@export')->name('customers.export');
    Route::post('customer/{customer}/export-data', 'CustomersController@exportDeviceData')->name('customer.export-data');
    Route::resource('customers', 'CustomersController');


    Route::resource('product_types', 'ProductTypesController');
    Route::resource('products', 'ProductsController');
    Route::resource('shops', 'ShopsController', ['except' => ['show']] );
    Route::resource('service-provider', 'ServiceProviderController');

    Route::resource('products.models', 'ProductModelsController', ['except' => ['index']]);

    Route::resource('faqs', 'FAQsController');
    Route::resource('warranties', 'WarrantyTermsController');

    Route::resource('repair_tnc', 'RepairTermController');
//    Route::get('/repair_tnc', 'SettingController@getRepairTerms')->middleware('can:manage-service-data');
//    Route::post('/repair_tnc', 'SettingController@postRepairTerms')->middleware('can:manage-service-data');

    Route::resource('service_centers', 'ServiceCenterController');

    Route::post('file_uploads', 'FileUploadController@uploadImage')->name('image_upload');


});
