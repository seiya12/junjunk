<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\CategoryHistory;

class CategoryController extends Controller
{
    public function index($code)
    {
        //TODO: 修正
        $products = Product::where('category', $code)->get(['product_code', 'name', 'price']);
        $popularCategory = CategoryHistory::create(['name' => 'Flight 10']);
        return view('category', compact('products'));
    }
}
