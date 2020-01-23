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
        // dd(Auth::user());
        $user = Auth::user();
        // dd($user->name);
        $sells =  Product::withTrashed()
            ->join('users', 'users.user_code', '=', 'products.sell_user_code')
            ->where('user_code',$user->user_code)
            ->select('product_code','products.name','products.deleted_at','products.price')
            ->paginate(3, ["*"], 'sells')
            ->appends(["itempage" => Input::get('buys')]);
        // dd($sell->name);
        $buys =  Transaction::join('products', 'products.product_code', '=', 'transactions.product_code')
            ->where('buyer_code',$user->user_code)
            ->select('products.product_code','products.name','products.sell_user_code','products.price','transactions.status')
            ->paginate(3, ["*"], 'buys')
            ->appends(["itempage" => Input::get('sells')]);
        return view('mypage', compact('user', 'sells','buys'));
    }
}
