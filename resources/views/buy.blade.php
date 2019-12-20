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
        @foreach($images as $img)
        <p><img src="{{ asset('img') }}/{{ $img['url'] }}" alt="商品画像"></p>
        @endforeach
        <div id="product-inner">
            <p>{{ $product['name'] }}</p>
            <p>¥{{ $product['price'] }} (税込み)</p>
        </div>
        <h2>支払い金額</h2>
        <p>¥{{ $product['price'] }}</p>
    </section>
    <section id="address">
        <h2>配送先</h2>
        <p>〒{{ $user['postal_code'] }}</p>
        <p>{{ $user['street_address'] }}</p>
        <p>田中 太郎</p>
    </section>
    <form action="{{ asset('pay') }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="amount" id="amount" value="{{ $product['price'] }}">
        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}" data-amount="{{ $product['price'] }}" data-name="ジャン×ジャンク決済" data-label="購入する" data-description="ジャン×ジャンク" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto" data-currency="JPY">
        </script>
    </form>
</article>
@endsection

<!-- footer -->
@include('common.footer')