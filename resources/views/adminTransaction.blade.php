@extends('layout.layout')

<!-- head -->
@section('title', 'AdminTransaction')
@section('style')
<link rel="stylesheet" href="{{asset('css/adminTransaction.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.admin')

<!-- content -->
@section('content')
<div id="title">{{ $transaction->transaction_code }}</div>
<div id="cont">
  <h1>取引詳細</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">項目</th>
        <th scope="col">内容</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>出品ユーザー</td>
        <td>{{ $transaction->seller_code }}</td>
      </tr>
      <tr>
        <td>購入ユーザー</td>
        <td>{{ $transaction->buyer_code }}</td>
      </tr>
      <tr>
        <td>商品コード</td>
        <td><a href="/product/{{ $transaction->product_code }}">{{ $transaction->product_code }}</a></td>
      </tr>
      <tr>
        <td>利用倉庫</td>
        <td>大阪府</td>
      </tr>
      <tr>
        <td>状態</td>
        <td>
          @if ($transaction->status == 1)
            発送待ち
          @elseif ($transaction->status == 2)
            検品待ち
          @else 
            検品済み
          @endif
        </td>
      </tr>
    </tbody>
  </table>
</div>
@endsection