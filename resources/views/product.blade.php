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
        <h2 id="title">{{ $product['name'] }}</h2>
        <div id="products" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @for ($i=0; $i < $cnt; $i++) @if($i===0) <li data-target="#products" data-slide-to="0" class="active">
                    </li>
                    @else
                    <li data-target="#products" data-slide-to="{{ $i }}"></li>
                    @endif
                    @endfor
            </ol>
            <div class="carousel-inner">
                @for($i = 1; $i <= $cnt; $i++) @if($i===1) <div class="carousel-item active">
                    <img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_{{ $i }}.jpg" alt="スライド">
            </div>
            @else
            <div class="carousel-item">
                <img id="carousel-img" src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_{{ $i }}.jpg" alt="スライド">
            </div>
            @endif
            @endfor
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
    </section>
    <section>
        <table class="table">
            <tr>
                <th>価格</th>
                <td>¥{{ number_format($product['price']) }}</td>
            </tr>
            <tr>
                <th>出品タイプ</th>
                <td>
                    @if ($product['sell_type'] == 'F')
                    フリマ出品
                    @elseif ($product['sell_type'] == 'O')
                    オークション出品
                    @else
                    リクエスト出品
                    @endif
                </td>
            </tr>
            <tr>
                <th>出品者</th>
                <td>{{ $user['account_name'] }}</td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $product['category'] }}</td>
            </tr>
            <tr>
                <th>状態</th>
                @if ($status->isEmpty())
                    <td>特になし</td>
                @else
                    <td>
                        @foreach ($status as $stat)
                            {{ $stat->status }} 
                        @endforeach
                    </td>
                @endif
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
        <!-- <a href="{{ url('/buy/')}}/{{ $product['product_code'] }}"><button type="button" class="btn btn-danger">購入画面へ進む</button></a> -->
    </section>
    <section>
        <p>{{ $product['description'] }}</p>
        @if ($auth == $user['user_code'])
        <p>自身の出品した商品です</p>
        @elseif ($product['deleted_at'] != null)
        <p>終了した出品です</p>
        @else
        <a href="{{ url('/buy/')}}/{{ $product['product_code'] }}"><button type="button" class="btn btn-danger">購入画面へ進む</button></a>
        @endif
    </section>
</article>
@endsection

<!-- footer -->
@include('common.footer')