@extends('layout.layout')

<!-- head -->
@section('title', '商品検索結果')
@section('style')
<link rel="stylesheet" href="{{asset('css/matching.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<h1 id="title">ジャン×ジャンマッチング</h1>
<article>
    <h2>ジャン×ジャンマッチングは</h2>
    <h3>現在開発中です</h3>
</article>
@endsection

<!-- footer -->
@include('common.footer')