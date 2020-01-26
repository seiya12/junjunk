<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\CategoryHistory;

class TopController extends Controller
{
    public function index()
    {
        // 新着商品の取得
        $newPhones = Product::where('category', 'MP')->orderBy('created_at', 'desc')->limit(3)->get(['product_code', 'name', 'sell_user_code','price','sell_type']);
        $newPCs = Product::where('category', 'PC')->orderBy('created_at', 'desc')->limit(3)->get(['product_code', 'name', 'sell_user_code','price','sell_type']);
        $newGames = Product::where('category', 'GM')->orderBy('created_at', 'desc')->limit(3)->get(['product_code', 'name', 'sell_user_code','price','sell_type']);
        $newFurniture = Product::where('category', 'FT')->orderBy('created_at', 'desc')->limit(3)->get(['product_code', 'name', 'sell_user_code','price','sell_type']);
        $newWatches = Product::where('category', 'WC')->orderBy('created_at', 'desc')->limit(3)->get(['product_code', 'name', 'sell_user_code','price','sell_type']);

        $popularItems = CategoryHistory::join('category_corresponds', 'code', '=', 'category_histories.category')
            ->orderBy('category_histories.count', 'desc')->limit(6)
            ->get(['name', 'code']);
        return view('top', compact('newPhones', 'newPCs', 'newGames', 'newFurniture', 'newWatches', 'popularItems'));
    }
}
