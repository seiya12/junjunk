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
})->name('login');

Route::get('signup', function () {
    return view('signup');
})->name('signup');

// TODO: 商品idの追加
Route::get('product', function () {
    return view('product');
})->name('product');

// TODO: 商品idの追加
Route::get('buy', function () {
    return view('buy');
})->name('buy');

// 認証ルート
Route::post('login', 'AuthController@login')->name('auth.login');
Route::post('signup', 'AuthController@signup')->name('auth.signup');

// OAuthルート
Route::get('login/google', 'AuthController@redirectToGoogle');
Route::get('login/google/callback', 'AuthController@handleGoogleCallback');
