<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\User;
use App\Model\Warehouse;
use App\Model\Transaction;
use Stripe\Stripe;
use Stripe\Charge;
use Auth;

class BuyController extends Controller
{
    public function index($code)
    {
        $product = Product::where('product_code', $code)->first(['product_code', 'sell_user_code']);

        $user = Product::join('users', 'products.sell_user_code', '=', 'users.user_code')
            ->where('product_code', $code)->first(['users.name', 'products.price', 'postal_code', 'prefectures', 'street_address','product_code','products.sell_user_code']);

        return view('buy', compact('product', 'user'));
    }

    public function pay(Request $req)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $charge = Charge::create(array(
            'amount' => $req->amount,
            'currency' => 'jpy',
            'source' => $req->stripeToken,
        ));

        // productテーブルから論理削除
        // Product::where('product_code',$req->product_code)->delete();

        // transaction書き込み
        // $sells =  Product::withTrashed()
        // ->join('users', 'users.user_code', '=', 'products.sell_user_code')
        // ->where('user_code',$user->user_code)
        // ->select('product_code','products.name')
        // ->get();
        $warehouse_code = User::join('users.prefecture','=','warehouses','warehouses.prefecture')
            ->where('users.user_code','=',$req->sell_user_code)
            ->select('warehouse_code');
        
        dd($warehouse_code);
        // $transaction_code =  $this->createTransactionCode($warehouse_code);
        // $user_code = Auth::user();
        // Transaction::insert([
        //     'transaction_code' => $transaction_code,
        //     'seller_code'      => $req->sell_user_code,
        //     'buyer_code'       => $user_code,
        //     'product_code'     => $req->product_code,
        //     'warehouse_code'   => $warehouse_code,
        // ]);

        // transaction番号出力
        return redirect()->route('top');
    }

    public function createTransactionCode($warehouse_code)
    {
        $section = 'F';
        $year = str_pad(date('y'), 3, 0, STR_PAD_LEFT);
        $month = strtoupper(dechex(date('n')));
        $cnt = Product::where('product_code', 'LIKE', "$warehouse_code$section$year$month%")->count();
        if ($cnt === 0) {
            $num = str_pad(1, 5, 0, STR_PAD_LEFT);
        } else {
            $num = str_pad($cnt + 1, 5, 0, STR_PAD_LEFT);
        }
        $productCode = $category . $section . $year . $month . $num;

        return $productCode;
    }
}
