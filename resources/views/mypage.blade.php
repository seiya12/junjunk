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
<div id="name">{{ $user->account_name }}</div>
<div id="cont">
  <h1>アカウント設定</h1>
  <form action="#">
    <label>メールアドレス</label>
    <p><input type="email" name ="email" class="form-control" value="{{ $user->email }}"></p>
    <label>アカウント名</label>
    <p><input type="text" name ="account_name" class="form-control" value="{{ $user->account_name }}"></p>
    <label>氏名</label>
    <p><input type="text" name ="name" class="form-control" value="{{ $user->name }}"></p>
    <label>郵便番号</label>
    <p><input type="text" name ="postal_code" class="form-control" value="{{ $user->postal_code }}"></p>
    <label>県</label>
    <p><input type="text" name ="prefectures" class="form-control" value="{{ $user->prefectures }}"></p>
    <label>住所</label>
    <p><input type="text" name ="street_address" class="form-control" value="{{ $user->street_address }}"></p>
    <a href=""><button type="submit" class="btn btn-danger">変更する</button></a>
  </form>
  <h1>出品した商品</h1>
  <ul>
  @foreach ($sells as $sell)
    <!-- <li>{{ $sell->product_code }}</li> -->
    <li><a href="/product/{{ $sell->product_code }}">{{ $sell->name }}</a></li>
  @endforeach
  </ul>
  <h1>購入した商品</h1>
  <ul>
  @foreach ($buys as $buy)
    <!-- <li>{{ $buy->product_code }}</li> -->
    <li><a href="/product/{{ $buy->product_code }}">{{ $buy->name }}</a></li>
  @endforeach
  </ul>
</div>
@endsection
<!-- footer -->
@include('common.footer')