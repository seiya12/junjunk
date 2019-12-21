<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class ProductController extends Controller
{
    public function index($code)
    {
        $product = Product::where('product_code', $code)->first();

        $user = Product::join('users', 'users.user_code', '=', 'products.sell_user_code')
            ->where('products.product_code', $code)->first(['users.account_name', 'prefectures']);

        $imgUrl = Product::join('image_url', 'image_url.product_code', '=', 'products.product_code')
            ->where('products.product_code', $code)->get('url');

        return view('product', compact('product', 'user', 'imgUrl'));
    }
}
