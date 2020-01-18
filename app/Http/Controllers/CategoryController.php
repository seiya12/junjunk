<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\CategoryHistory;

class CategoryController extends Controller
{
    public function index($code)
    {
        $products = Product::where('category', $code)->get(['product_code', 'name', 'price', 'sell_user_code']);
        $popularCategory = CategoryHistory::where('category', $code)->first();
        if ($popularCategory == null) {
            CategoryHistory::create(['category' => $code, 'count' => '1']);
        } else {
            $count = $popularCategory->count;
            $count = $count + 1;
            CategoryHistory::where('category', $code)->update(['count' => $count]);
        }
        return view('category', compact('products'));
    }
}
