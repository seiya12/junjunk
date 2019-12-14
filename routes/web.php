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

Route::get('/', 'TopController@index')->name('top');

Route::get('login', function () {
    return view('login');
});

// 会員登録ルート
Route::get('signup', function () {
    return view('signup');
});

Route::get('signup/form', function () {
    return view('signup-form');
})->name('signup.form');

Route::post('signup/form', 'AuthController@signup')->name('signup');

// 商品詳細ルート
Route::get('product/{id}', 'ProductController@index');

// 購入ルート
Route::get('buy/{id}', 'BuyController@index');
Route::get('buy/complete/{id}', 'BuyController@buy');

// 認証ルート
Route::post('login', 'AuthController@login')->name('auth.login');
Route::post('signup', 'AuthController@signup')->name('auth.signup');

// OAuthルート
Route::get('login/{provider}', 'AuthController@redirectTo');
Route::get('login/{provider}/callback', 'AuthController@handleProviderCallback');
