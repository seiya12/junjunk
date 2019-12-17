@extends('layout.layout')

<!-- head -->
@section('title', 'カテゴリ一覧')
@section('style')
<link rel="stylesheet" href="{{asset('css/searchCategory.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<h1>カテゴリー一覧</h1>
<article>
    <ul id="categories">
        <li>
            <a href="#">
                <img src="{{ asset('img/category_pc.jpg') }}" alt="カテゴリー画像">
                <h3>パソコン周辺機器</h3>
            </a>
        </li>
        <li>
            <a href="/category/GM">
                <img src="{{ asset('img/category_gm.jpg') }}" alt="カテゴリー画像">
                <h3>ゲーム機器</h3>
            </a>
        </li>
        <li>
            <a href="/category/CA">
                <img src="{{ asset('img/category_ca.jpg') }}" alt="カテゴリー画像">
                <h3>カメラ関連</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_tv.jpg') }}" alt="カテゴリー画像">
                <h3>テレビ</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_wc.jpg') }}" alt="カテゴリー画像">
                <h3>腕時計</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_mi.jpg') }}" alt="カテゴリー画像">
                <h3>楽器</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_mp.jpg') }}" alt="カテゴリー画像">
                <h3>携帯電話</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_tl.jpg') }}" alt="カテゴリー画像">
                <h3>工具</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_sf.jpg') }}" alt="カテゴリー画像">
                <h3>ソフト</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_ad.jpg') }}" alt="カテゴリー画像">
                <h3>オーディオ</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_ft.jpg') }}" alt="カテゴリー画像">
                <h3>家具</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_vl.jpg') }}" alt="カテゴリー画像">
                <h3>乗り物</h3>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ asset('img/category_et.jpg') }}" alt="カテゴリー画像">
                <h3>その他</h3>
            </a>
        </li>
    </ul>
</article>
@endsection

<!-- footer -->
@include('common.footer')