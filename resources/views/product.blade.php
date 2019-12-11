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
    <section>
        <h2>{{ $productTitle }}</h2>
        <div id="products" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#products" data-slide-to="0" class="active"></li>
                @foreach($products as $key => $product)
                <li data-target="#products" data-slide-to="{{ $key + 1 }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="slide1.png" alt="スライド">
                </div>
                @foreach($products as $product)
                <div class="carousel-item">
                    <img src="{{ product['url'] }}" alt="スライド">
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
        <p>￥900 (税込) 送料込み</p>
    </section>
    <section>
        <table class="table">
            <tr>
                <th>出品者</th>
                <td></td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td></td>
            </tr>
            <tr>
                <th>配送元地域</th>
                <td></td>
            </tr>
            <tr>
                <th>発送日の目安</th>
                <td></td>
            </tr>
        </table>
        <p>¥900 (税込み) 送料込み</p>
    </section>

    <section>

    </section>
</article>
@endsection

<!-- footer -->
@include('common.footer')