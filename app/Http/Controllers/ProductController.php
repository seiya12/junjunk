<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use Storage;
use Auth;

class ProductController extends Controller
{
    public function index($code)
    {
        $product = Product::withTrashed()->where('product_code', $code)->first();

        $user = Product::withTrashed()->join('users', 'users.user_code', '=', 'products.sell_user_code')
            ->where('products.product_code', $code)->first(['user_code', 'users.account_name', 'prefectures']);

        $cnt = 0;
        for ($i = 1; $i <= 10; $i++) {
            if (Storage::disk('s3')->exists($user['user_code'] . '/' . $product['product_code'] . '_' . $i . '.jpg') === false) {
                break;
            }
            $cnt++;
        }
        $auth = Auth::user()->user_code;
        return view('product', compact('product', 'user', 'cnt','auth'));
    }
}
