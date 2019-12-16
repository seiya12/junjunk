@extends('layout.layout')

<!-- head -->
@section('title', '商品一覧')
@section('style')
<link rel="stylesheet" href="{{asset('css/searchCategory.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
@foreach($products as $product)
<a href="/product/{{ $product['product_code'] }}">
    <p><img src="{{ asset('img') }}/{{ $product['product_code'] }}.jpg" alt="商品画像"></p>
    <p>{{ $product['name'] }}</p>
    <p>{{ $product['price'] }}</p>
</a>
@endforeach
@endsection

<!-- footer -->
@include('common.footer')