<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;

class ProductController extends Controller
{
    public function index($code)
    {
        $product = Product::where('product_code', $code)->get();
        $imgUrl = Product::join('images', 'images.product_code', '=', 'products.product_code')
            ->where('product_code', $code)->get('url');

        return view('product', compact('product', 'imgUrl'));
    }
}
