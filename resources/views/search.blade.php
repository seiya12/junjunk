@extends('layout.layout')

<!-- head -->
@section('title', '商品検索結果')
@section('style')
<link rel="stylesheet" href="{{asset('css/search.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<article>
    <div id="search-detail-wrapper">
        <div class="dropdown">
            <button type="button" id="dropdown1" class="btn  btn-outline-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                並び替え
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdown1">
                <a class="dropdown-item" href="/search?keyword={{ $keyword }}&sort=price-asc&category={{ $category }}&min_price={{ $min_price }}&max_price={{ $max_price }}">価格の安い順</a>
                <a class="dropdown-item" href="/search?keyword={{ $keyword }}&sort=price-desc&category={{ $category }}&min_price={{ $min_price }}&max_price={{ $max_price }}">価格の高い順</a>
                <a class="dropdown-item" href="/search?keyword={{ $keyword }}&sort=created-desc&category={{ $category }}&min_price={{ $min_price }}&max_price={{ $max_price }}">出品の新しい順</a>
            </div>
        </div>
        <div id="modal">
            <!-- 切り替えボタンの設定 -->
            <button type="button" id="detail-search-btn" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
                詳細検索
            </button>
            <!-- モーダルの設定 -->
            <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <form action="search" method="get">
                            <h3><img src="{{ asset('img/add.svg') }}" alt="Add">キーワードの追加</h3>
                            <p><input type="text" name="keyword" value="{{ $keyword }}" id="add-input"></p>
                            <h3><img src="{{ asset('img/category.svg') }}" alt="Category">カテゴリの選択</h3>
                            <p>
                                <select name="category">
                                    <option value="">-</option>
                                    <option value="GM">ゲーム</option>
                                    <option value="CA">カメラ</option>
                                    <option value="WC">腕時計</option>
                                    <option value="MI">楽器</option>
                                    <option value="MP">携帯電話</option>
                                    <option value="SF">ソフト</option>
                                    <option value="AD">オーディオ</option>
                                    <option value="PC">パソコン</option>
                                    <option value="TV">テレビ</option>
                                    <option value="FT">家具</option>
                                    <option value="VL">乗り物</option>
                                    <option value="ET">その他</option>
                                </select>
                            </p>
                            <h3><img src="{{ asset('img/price.svg') }}" alt="Price">値段</h3>
                            <p>
                                <input type="number" name="min_price" placeholder="Min" class="price-input"> 〜 <input type="number" name="max_price" placeholder="Max" class="price-input">
                            </p>
                            <button type="submit" class="btn btn-primary">検索</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.modal -->
    </div>
    @if($keyword)
    <h1>{{ $keyword }}での検索結果</h1>
    @endif
    @foreach($products as $product)
    <a href="/product/{{ $product['product_code'] }}" class="product">
        <p><img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $product['sell_user_code'] }}/{{ $product['product_code'] }}_1.jpg" alt="商品画像"></p>
        <p>{{ $product['name'] }}</p>
        <p>{{ $product['price'] }}</p>
    </a>
    @endforeach
</article>
@endsection

<!-- footer -->
@include('common.footer')