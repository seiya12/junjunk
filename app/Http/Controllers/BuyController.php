<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use Stripe\Stripe;
use Stripe\Charge;

class BuyController extends Controller
{
    public function index($code)
    {
        $product = Product::where('product_code', $code)->first(['product_code', 'sell_user_code']);

        $user = Product::join('users', 'products.sell_user_code', '=', 'users.user_code')
            ->where('product_code', $code)->first(['users.name', 'products.price', 'postal_code', 'prefectures', 'street_address']);

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

        return back();
    }
}
