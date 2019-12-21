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
        $newPhones = Product::where('category', 'MP')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name', 'sell_user_code']);
        $newPCs = Product::where('category', 'PC')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name', 'sell_user_code']);
        $newGames = Product::where('category', 'GM')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name', 'sell_user_code']);
        $newFurniture = Product::where('category', 'FT')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name', 'sell_user_code']);
        $newWatches = Product::where('category', 'WC')->orderBy('created_at', 'desc')->limit(8)->get(['product_code', 'name', 'sell_user_code']);

        $popularItems = CategoryHistory::join('category_correspond', 'code', '=', 'category_histories.category')
            ->orderBy('category_histories.count', 'desc')->limit(6)
            ->get(['name', 'code']);
        return view('top', compact('newPhones', 'newPCs', 'newGames', 'newFurniture', 'newWatches', 'popularItems'));
    }
}
