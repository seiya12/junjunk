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

// ログイン
Route::get('login', function () {
    return view('login');
})->name('login');

// 会員登録
Route::get('signup', function () {
    return view('signup');
});

Route::get('signup/form', function () {
    return view('signupForm');
})->name('signup.form');

Route::post('signup/form', 'AuthController@signup')->name('signup');

// ログアウト
Route::get('logout', 'AuthController@logout')->name('logout');

// 商品詳細
Route::get('product/{id}', 'ProductController@index');

// 認証ルート
Route::post('login', 'AuthController@login')->name('auth.login');
Route::post('signup', 'AuthController@signup')->name('auth.signup');

// OAuth
Route::get('login/{provider}', 'AuthController@redirectTo');
Route::get('login/{provider}/callback', 'AuthController@handleProviderCallback');

// カテゴリー一覧
Route::get('category/', function () {
    return view('searchCategory');
});

// matching
Route::get('matching/', function () {
    return view('matching');
});

// カテゴリー検索結果
Route::get('category/{code}', 'CategoryController@index');

// 商品検索
Route::get('search', 'SearchController@search');

// 商品検索
Route::get('admin', 'AdminController@index');
Route::get('admin/search', 'AdminController@search');

// 商品詳細
Route::get('product/{code}', 'ProductController@index');

// ログイン済みのみ
Route::group(['middleware' => 'auth'], function () {
    // 購入
    Route::get('buy/{id}', 'BuyController@index');

    // 決済
    Route::post('pay', 'BuyController@pay');

    // 出品
    Route::get('sell', 'SellController@index');
    Route::post('sell', 'SellController@upload');

    Route::get('mypage', 'MyPageController@index')->name('mypage');
});
