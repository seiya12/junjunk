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
    <h2 id="title">購入内容の確認</h2>
    <section id="product">
        <h2>商品情報</h2>
        <p><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></p>
        <div id="product-inner">
            <p>出品者番号：{{ $product['sell_user_code'] }}</p>
            <p>金額：¥{{ $product['price'] }}</p>
        </div>
        <h2>支払い金額</h2>
        <p>¥{{ $product['price'] }}</p>
    </section>
    <section id="address">
        <h2>配送先</h2>
        <p>〒{{ $user['postal_code'] }}</p>
        <p>{{ $user['street_address'] }}</p>
        <p>{{ $user['name'] }}　様</p>
    </section>
    <form action="{{ asset('pay') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="amount" id="amount" value="{{ $product['price'] }}">
        <input type="hidden" name="product_code" id="product_code" value="{{ $product['product_code'] }}">
        <input type="hidden" name="sell_user_code" id="sell_user_code" value="{{ $product['sell_user_code'] }}">
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-amount="{{ $product['price'] }}" data-name="ジャン×ジャンク決済" data-label="購入する" data-description="ジャン×ジャンク" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto" data-currency="JPY">
        </script>
    </form>
</article>
@endsection

<!-- footer -->
@include('common.footer')