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
    <ul class="category_flex">
      @foreach($products as $product)
      <div class="category_item">
        <a href="/product/{{ $product['product_code'] }}">
            <li><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></li>
            <li class="height">{{ $product['name'] }}</li>
            <li class="price">¥{{ number_format($product['price']) }}</li>
            @if ($product['sell_type'] == 'F')
            <li class="method">フリマ</li>
            @elseif ($product['sell_type'] == 'O')
            <li class="method2">オークション</li>
            @endif
        </a>
      </div><!-- category_item -->
      @endforeach
    </ul><!-- category_flex -->
</article>
@endsection

<!-- footer -->
@include('common.footer')
