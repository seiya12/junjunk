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
    <section>
        <h2>人気のカテゴリー</h2>
        <ul id="popular-item">
            <li>スマホ</li>
            <li>パソコン</li>
            <li>ゲーム</li>
            <li>家具</li>
            <li>腕時計</li>
            <li>バイク</li>
        </ul>
    </section>
    <section>
        <h2>スマホ新着</h2>
        <h2>パソコン新着</h2>
        <h2>ゲーム新着</h2>
        <h2>家具新着</h2>
        <h2>腕時計新着</h2>
    </section>
</article>
@endsection

<!-- footer -->
@include('common.footer')