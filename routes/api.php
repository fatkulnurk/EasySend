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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'namespace' => 'Shipper',
    'as' => 'shipper',
    'prefix' => 'shipper.'
], function (){
    Route::group([
       'as' => 'order.',
        'prefix' => 'order'
    ], function () {
        Route::get('/', 'OrderController@index');
        Route::post('/', 'OrderController@store');
        Route::get('/{id}', 'OrderController@show');
        Route::post('/{id}', 'OrderController@update');
        Route::post('/{id}/delete', 'OrderController@delete');
    });
});
