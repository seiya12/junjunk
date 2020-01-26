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
        $product = Product::where('product_code', $code)->first(['product_code', 'sell_user_code','price']);

        $user = User::where('user_code', Auth::user()->user_code)->first(['users.name', 'postal_code', 'prefectures', 'street_address']);

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
        Product::where('product_code',$req->product_code)->delete();
        // transaction書き込み
        $warehouse_code = Warehouse::join('users','users.prefectures','=','warehouses.prefecture')
            ->where('users.user_code',$req->sell_user_code)
            ->select('warehouses.warehouse_code')
            ->get();
        $transaction_code =  $this->createTransactionCode($warehouse_code[0]->warehouse_code);
        $user_code = Auth::user()->user_code;
        Transaction::insert([
            'transaction_code' => $transaction_code,
            'seller_code'      => $req->sell_user_code,
            'buyer_code'       => $user_code,
            'product_code'     => $req->product_code,
            'warehouse_code'   => $warehouse_code[0]->warehouse_code,
            'profit'           => $req->amount * 0.2,
            'created_at' => now(),
        ]);

        // transaction番号出力
        return view('transaction',compact('transaction_code'));
    }

    public function createTransactionCode($warehouse_code)
    {
        $section = 'F';
        $year = str_pad(date('y'), 3, 0, STR_PAD_LEFT);
        $month = strtoupper(dechex(date('n')));
        $like = $warehouse_code.$section.$year.$month.'%';
        $cnt = Transaction::where('transaction_code', 'LIKE', $like)->count();
        if ($cnt === 0) {
            $num = str_pad(1, 5, 0, STR_PAD_LEFT);
        } else {
            $num = str_pad($cnt + 1, 5, 0, STR_PAD_LEFT);
        }
        $transactionCode = $warehouse_code . $section . $year . $month . $num;

        return $transactionCode;
    }
}
