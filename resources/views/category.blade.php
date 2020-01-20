@extends('layout.layout')

<!-- head -->
@section('title', '商品一覧')
@section('style')
<link rel="stylesheet" href="{{asset('css/category.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<h1 id="title">商品一覧</h1>
<article>
    @if($products->isEmpty())
    <p id="not-found">商品が見つかりません</p>
    @endif
    @foreach($products as $product)
    <a href="/product/{{ $product['product_code'] }}">
        <p><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></p>
        <p>{{ $product['name'] }}</p>
        <p>{{ $product['price'] }}</p>
    </a>
    @endforeach
</article>
@endsection

<!-- footer -->
@include('common.footer')