@extends('layout.layout')

<!-- head -->
@section('title', 'Buy')
@section('style')
<link rel="stylesheet" href="{{asset('css/buy.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<article>
    <section id="product">
        <h2 id="title">購入内容の確認</h2>
        <p><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></p>
        <div id="product-inner">
            <p>{{ $user['sell_user_code'] }}</p>
            <p>¥{{ $user['price'] }} (税込み)</p>
        </div>
        <h2>支払い金額</h2>
        <p>¥{{ $user['price'] }}</p>
    </section>
    <section id="address">
        <h2>配送先</h2>
        <p>〒{{ $user['postal_code'] }}</p>
        <p>{{ $user['street_address'] }}</p>
        <p>{{ $user['account_name'] }}</p>
    </section>
    <form action="{{ asset('pay') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="amount" id="amount" value="{{ $user['price'] }}">
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-amount="{{ $product['price'] }}" data-name="ジャン×ジャンク決済" data-label="購入する" data-description="ジャン×ジャンク" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto" data-currency="JPY">
        </script>
    </form>
</article>
@endsection

<!-- footer -->
@include('common.footer')