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
  <h1>出品した商品</h1>
  <ul>
  @foreach ($sells as $sell)
    <!-- <li>{{ $sell->product_code }}</li> --> 
    <div class="productBox">
      <a href="/product/{{ $sell->product_code }}">
        <li class="productLi">
          <img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $user['user_code'] }}/{{ $sell['product_code'] }}_1.jpg" alt="商品画像">
          <div class ="productCont">
            <p>{{ $sell->name }}</p>
            <p>¥{{ number_format($sell->price) }}</p>
            @if ($sell->deleted_at == null)
              <p class="green">出品中</p>
            @else
              <p class="red">販売済み</p>
            @endif
            @if ($sell->status == 1)
              <p class="green">発送待ち</p>
              <p class="transaction">ID:{{ $sell->transaction_code }}</p>
            @elseif ($sell->status == 2)
              <p class="red">取引完了</p>
              <p class="transaction">ID:{{ $sell->transaction_code }}</p>
            @else
              <br><br>
            @endif
            <!-- <p>{{ $sell->transaction_code }}</p> -->
          </div>
        </li>
      </a>
    </div>
  @endforeach
  </ul>
  <div class="d-flex justify-content-center">
    {{ $sells->links() }}
  </div>
  <h1>購入した商品</h1>
  <ul>
  @foreach ($buys as $buy)
    <!-- <li>{{ $buy->product_code }}</li> -->
    <div class="productBox">
    <a href="/product/{{ $buy->product_code }}"><li class="productLi">
      <img src="https://junjunk.s3-ap-northeast-1.amazonaws.com/{{ $buy['sell_user_code'] }}/{{ $buy['product_code'] }}_1.jpg" alt="商品画像">
      <div class="productCont">
        <p>{{ $buy->name }}</p>
        <p>¥{{ number_format($buy->price) }}</p>
        @if ($buy->status == 1)
          <p class="green">発送待ち</p>
        @else
          <p class="red">取引完了</p>
        @endif
        <p class="transaction">ID:{{ $buy->transaction_code }}</p>
      </div>
    </li></a></div>
  @endforeach
  </ul>
  <div class="d-flex justify-content-center">
    {{ $buys->links() }}
  </div>

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
    <label>都道府県</label>
    <p><input type="text" name ="prefectures" class="form-control" value="{{ $user->prefectures }}"></p>
    <label>住所</label>
    <p><input type="text" name ="street_address" class="form-control" value="{{ $user->street_address }}"></p>
    <a href=""><button type="submit" class="btn btn-danger">変更する</button></a>
  </form>
</div>
@endsection
<!-- footer -->
@include('common.footer')