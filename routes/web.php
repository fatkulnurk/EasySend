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

Route::view('/', 'welcome');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::namespace('Auth')->group(function () {
        Route::get('login', 'LoginController@showLoginForm');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout');

        Route::get('register', 'RegisterController@showRegisterForm');
        Route::post('register', 'RegisterController@register');

        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}', 'ForgotPasswordController@showResetForm');
        Route::post('password/reset', 'ForgotPasswordController@reset');
    });


    Route::get('users', function () {

    });
});

Route::group(['prefix' => 'shipper', 'namespace' => 'Shipper'], function () {
    Route::namespace('Auth')->group(function () {
        Route::get('login', 'LoginController@showLoginForm');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout');

        Route::get('register', 'RegisterController@showRegisterForm');
        Route::post('register', 'RegisterController@register');

        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}', 'ForgotPasswordController@showResetForm');
        Route::post('password/reset', 'ForgotPasswordController@reset');
    });

    Route::get('users', function () {

    });
});

Route::group(['prefix' => 'transporter', 'namespace' => 'Transporter'], function () {
    Route::namespace('Auth')->group(function () {
        Route::get('login', 'LoginController@showLoginForm');
        Route::post('login', 'LoginController@login');
        Route::post('logout', 'LoginController@logout');

        Route::get('register', 'RegisterController@showRegisterForm');
        Route::post('register', 'RegisterController@register');

        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
        Route::get('password/reset/{token}', 'ForgotPasswordController@showResetForm');
        Route::post('password/reset', 'ForgotPasswordController@reset');
    });

    Route::get('users', function () {

    });
});
