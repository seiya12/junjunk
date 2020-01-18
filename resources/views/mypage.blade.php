@extends('layout.layout')

<!-- head -->
@section('title', 'MyPage')
@section('style')
<link rel="stylesheet" href="{{asset('css/mypage.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<div id="cont">
  <div id="name">{{ $user->account_name }}</div>
  <h1>個人情報設定</h1>

  <h1>出品した商品</h1>
  <ul>
  @foreach ($sells as $sell)
    <li>{{ $sell->product_code }}</li>
    <li>{{ $sell->name }}</li>
  @endforeach
  </ul>
  <h1>購入した商品</h1>
  <ul>
  @foreach ($buys as $buy)
    <li>{{ $buy->product_code }}</li>
    <li>{{ $buy->name }}</li>
  @endforeach
  </ul>
</div>
@endsection

<!-- footer -->
@include('common.footer')