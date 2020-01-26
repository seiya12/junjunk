<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Product;
use App\Model\Transaction;
use Illuminate\Support\Facades\Input;

class MyPageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $sells =  Product::withTrashed()
            ->join('users', 'users.user_code', '=', 'products.sell_user_code')
            ->leftJoin('transactions','transactions.product_code','=','products.product_code')
            ->where('user_code',$user->user_code)
            ->select('products.product_code','products.name','products.deleted_at','products.price','users.user_code','transactions.transaction_code','transactions.status')
            ->orderBy('products.created_at','desc')
            ->paginate(3, ["*"], 'sells')
            ->appends(["itempage" => Input::get('buys')]);
        $buys =  Transaction::join('products', 'products.product_code', '=', 'transactions.product_code')
            ->where('buyer_code',$user->user_code)
            ->select('products.product_code','products.name','products.sell_user_code','products.price','transactions.status','transactions.transaction_code')
            ->orderBy('transactions.created_at','desc')
            ->paginate(3, ["*"], 'buys')
            ->appends(["itempage" => Input::get('sells')]);
        return view('mypage', compact('user', 'sells','buys'));
    }
}
