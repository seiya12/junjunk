<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index($code)
    {
        //TODO: 修正
        $products = Product::where('category', $code)->get(['product_code', 'name', 'price']);

        return view('category', compact('products'));
    }
}
