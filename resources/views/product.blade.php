@extends('layout.layout')

<!-- head -->
@section('title', '商品詳細')
@section('style')
<link rel="stylesheet" href="{{asset('css/product.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')

<article>
    <section>
        <h2>{{ $product['name'] }}</h2>
        <div id="products" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#products" data-slide-to="0" class="active"></li>
                @foreach($imgUrl as $key => $url)
                <li data-target="#products" data-slide-to="{{ $key + 1 }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="slide1.png" alt="スライド">
                </div>
                @foreach($imgUrl as $url)
                <div class="carousel-item">
                    <img src="{{ $url }}.jpg" alt="スライド">
                </div>
                @endforeach
                <a class="carousel-control-prev" href="#example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <p>{{ product['price'] }} (税込)</p>
    </section>
    <section>
        <table class="table">
            <tr>
                <th>出品者</th>
                <td>{{ $product['account_name'] }}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $product['category'] }}</td>
            </tr>
            <tr>
                <th>配送元地域</th>
                <td>{{ $product['origin'] }}</td>
            </tr>
            <tr>
                <th>発送日の目安</th>
                <td>{{ $product['estimate'] }}</td>
            </tr>
        </table>
        <p>{{ product['price'] }} (税込み)</p>
        <a href="{{ action('buyController@index', $product['id']) }}"><button type="button" class="btn btn-danger">購入画面へ進む</button></a>
    </section>
    <section>
        <p>{{ product['description'] }}</p>
    </section>
</article>
@endsection

<!-- footer -->
@include('common.footer')