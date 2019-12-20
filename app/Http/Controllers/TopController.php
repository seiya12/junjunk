<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TopController extends Controller
{
    public function index()
    {
        // 新着商品の取得
        $newPhones = Product::where('category', 'MP')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name']);
        $newPCs = Product::where('category', 'PC')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name']);
        $newGames = Product::where('category', 'GM')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name']);
        $newFurniture = Product::where('category', 'FT')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name']);
        $newWatches = Product::where('category', 'WC')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name']);

        return view('top', compact('newPhones', 'newPCs', 'newGames', 'newFurniture', 'newWatches'));
    }
}
