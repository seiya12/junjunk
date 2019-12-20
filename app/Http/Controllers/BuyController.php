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
        $product = Product::where('product_code', $code)->first();

        $user = Product::join('users', 'users.user_code', '=', 'products.sell_user_code')
            ->where('products.product_code', $code)->first(['users.account_name', 'postal_code', 'prefectures', 'street_address']);

        $images = Product::join('images', 'images.product_code', '=', 'products.product_code')
            ->where('products.product_code', $code)->get('url');

        return view('buy', compact('product', 'user', 'images'));
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
