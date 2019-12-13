@extends('layout.layout')

<!-- head -->
@section('title', 'Top')
@section('style')
<link rel="stylesheet" href="{{asset('css/top.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
@auth

<p>ログインユーザーに表示する。</p>

@endauth

<article>
    <section id="product">
        <h2 id="title">購入内容の確認</h2>
        <p><img src="{{ $product['url] }}" alt="商品画像"></p>
        <div id="product-inner">
            <p>{{ $product['title'] }}</p>
            <p>¥{{ $product['price'] }} (税込み)</p>
        </div>
        <h2>支払い金額</h2>
        <p>¥{{ $product['price'] }}</p>
    </section>
    <section id="pay-usage">
        <h2>支払い方法</h2>
        <p>クレジットカード</p>
        <p>************1234</p>
        <p>有効期限 01/21</p>
        <p><img src="{{ asset('img/visa.png') }}" alt="Visa"></p>
    </section>
    <section id="address">
        <h2>配送先</h2>
        <p>〒{{ $user['zip_code'] }}</p>
        <p>{{ $user['zip_address'] }}</p>
        <p>田中 太郎</p>
    </section>
    <a href="{{ action('buyController@buy', $product['id']) }}"><button class="btn btn-danger">購入する</button></a>
</article>
@endsection

<!-- footer -->
@include('common.footer')