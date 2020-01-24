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
<div id="slide" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/slide01.png')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/slide02.png')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img src="{{asset('img/slide03.png')}}" alt="Third slide">
        </div>
        <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<article>
    <section">
        <h2>人気のカテゴリー</h2>
        <ul id="popular-item">
            @foreach($popularItems as $item)
            <li><a href="/category/{{ $item['code'] }}">{{ $item['name'] }}</a></li>
            @endforeach
        </ul>
    </section">

    <section class="new">
        <h2>スマホ新着</h2>
        <ul class="new_flex">
            @foreach($newPhones as $product)
              <div class="new_item">
                <li><a href="/product/{{ $product['product_code'] }}"><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></a></li>
                <li>{{ $product['name'] }}</li>
                <li>¥{{ number_format($product['price']) }}</li>
            </div>
            @endforeach
        </ul>
    </section>
    <section class="new">
        <h2>パソコン新着</h2>
        <ul class="new_flex">
            @foreach($newPCs as $product)
            <div class="new_item">
              <li><a href="/product/{{ $product['product_code'] }}"><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></a></li>
              <li>{{ $product['name'] }}</li>
              <li>¥{{ number_format($product['price']) }}</li>
            </div>
            @endforeach
        </ul>
    </section>
    <section class="new">
        <h2>ゲーム新着</h2>
        <ul class="new_flex">
          @foreach($newGames as $product)
            <div class="new_item">
              <li><a href="/product/{{ $product['product_code'] }}"><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></a></li>
              <li class="height">{{ $product['name'] }}</li>
              <li class="price">¥{{ number_format($product['price']) }}</li>
            </div><!-- new_item -->
          @endforeach
        </ul>
    </section>
    <section class="new">
        <h2>家具新着</h2>
        <ul class="new_flex">
              @foreach($newFurniture as $product)
              <div class="new_item">
                <li><a href="/product/{{ $product['product_code'] }}"><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></a></li>
                <li>{{ $product['name'] }}</li>
                <li>¥{{ number_format($product['price']) }}</li>
              </div>
              @endforeach
        </ul>
    </section>
    <section class="new">
        <h2>腕時計新着</h2>
        <ul class="new_flex">
            @foreach($newWatches as $product)
            <div class="new_item">
              <li><a href="/product/{{ $product['product_code'] }}"><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></a></li>
              <li>{{ $product['name'] }}</li>
              <li>¥{{ number_format($product['price']) }}</li>
            </div>
            @endforeach
        </ul>
    </section>

</article>
@endsection

<!-- footer -->
@include('common.footer')
