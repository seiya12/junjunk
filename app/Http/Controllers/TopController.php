<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class TopController extends Controller
{
    public function index()
    {
        // TODO: titleも取る？
        // 新着商品の取得
        $newPhones = Product::where('category', '携帯')->orderBy('created_at', 'desc')->limit(9)->get(['img01_url', 'sell_url']);
        $newPCs = Product::where('category', 'PC')->orderBy('created_at', 'desc')->limit(9)->get(['img01_url', 'sell_url']);
        $newGames = Product::where('category', 'ゲーム')->orderBy('created_at', 'desc')->limit(9)->get(['img01_url', 'sell_url']);
        $newFurniture = Product::where('category', '家具')->orderBy('created_at', 'desc')->limit(9)->get(['img01_url', 'sell_url']);
        $newWatches = Product::where('category', '時計')->orderBy('created_at', 'desc')->limit(9)->get(['img01_url', 'sell_url']);

        return view('top', compact('newPhones', 'newPCs', 'newGames', 'newFurniture', 'newWatches',));
    }
}
