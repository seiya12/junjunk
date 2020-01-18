<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Product;
use App\Model\Transaction;

class MyPageController extends Controller
{
    public function index()
    {
        // dd(Auth::user());
        $user = Auth::user();
        // dd($user->name);
        $sells =  Product::join('users', 'users.user_code', '=', 'products.sell_user_code')
            ->where('user_code',$user->user_code)
            ->select('product_code','products.name')
            ->get();
        // dd($sell->name);
        $buys =  Transaction::join('products', 'products.product_code', '=', 'transactions.product_code')
            ->where('buyer_code',$user->user_code)
            ->select('products.product_code','products.name')
            ->get();
        return view('mypage', compact('user', 'sells','buys'));
    }
}
