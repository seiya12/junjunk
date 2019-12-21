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
                @foreach($imgUrl as $key => $url)
                    @if($key === 0)
                        <li data-target="#products" data-slide-to="0" class="active"></li>
                    @else
                        <li data-target="#products" data-slide-to="{{ $key }}"></li>
                    @endif
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach($imgUrl as $key => $url)
                    @if($key === 0)
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/sell') }}/{{ $product['sell_user_code'] }}/{{ $url['url'] }}.jpg" alt="スライド">
                        </div>
                    @else
                        <div class="carousel-item">
                            <img id="carousel-img" src="{{ asset('storage/sell') }}/{{ $product['sell_user_code'] }}/{{ $url['url'] }}.jpg" alt="スライド">
                        </div>
                @endif
                @endforeach
                <a class="carousel-control-prev" href="#products" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#products" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <p>{{ $product['price'] }} (税込)</p>
    </section>
    <section>
        <table class="table">
            <tr>
                <th>出品者</th>
                <td>{{ $user['account_name'] }}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $product['category'] }}</td>
            </tr>
            <tr>
                <th>配送元地域</th>
                <td>{{ $user['prefectures'] }}</td>
            </tr>
            <tr>
                <th>発送日の目安</th>
                <td>{{ $product['estimate'] }}</td>
            </tr>
        </table>
        <p>{{ $product['price'] }} (税込み)</p>
        <a href="{{ url('/buy/')}}/{{ $product['product_code'] }}"><button type="button" class="btn btn-danger">購入画面へ進む</button></a>
    </section>
    <section>
        <p>{{ $product['description'] }}</p>
        <a href="{{ url('/buy/')}}/{{ $product['product_code'] }}"><button type="button" class="btn btn-danger">購入画面へ進む</button></a>
    </section>
</article>
@endsection

<!-- footer -->
@include('common.footer')