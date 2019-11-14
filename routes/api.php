<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => 'auth.avita'], function() {
    Route::get('/me', 'APIController@myProfile');
    Route::post('/me', 'APIController@updateProfile');
    Route::post('/refresh_token', 'APIController@refreshToken');
    Route::post('/logout', 'APIController@logout');
});

Route::group(['middleware' => 'api_service_provider'], function () {
    Route::get('device_data', 'DeviceDataAPIController@getDeviceData');
    Route::post('device_data', 'DeviceDataAPIController@addDeviceData');
    Route::put('device_data', 'DeviceDataAPIController@updateDeviceData');
    Route::delete('device_data', 'DeviceDataAPIController@deleteDeviceData');
});

