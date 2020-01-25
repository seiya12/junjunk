@extends('layout.layout')

<!-- head -->
@section('title', 'Admin')
@section('style')
<link rel="stylesheet" href="{{asset('css/admin.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.admin')

<!-- content -->
@section('content')
<div id="title">営業成績</div>
<div id="cont">
  <h1>本日の成績<span>({{ date('Y年m月d日') }})</span></h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">項目</th>
        <th scope="col">成績</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>取引件数</td>
        <td>{{ $todayCount }}件</td>
      </tr>
      <tr>
        <td>利益</td>
        <td>{{ number_format($todayProfit) }}円</td>
      </tr>
      <tr>
        <td>出品数</td>
        <td>{{ $todayProduct }}件</td>
      </tr>
      <tr>
        <td>新規ユーザー数</td>
        <td>{{ $todayUser }}人</td>
      </tr>
    </tbody>
  </table>

  <h1>今月の成績<span>({{ date('Y年m月') }})</span></h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">項目</th>
        <th scope="col">成績</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>取引件数</td>
        <td>{{ $tomonthCount }}件</td>
      </tr>
      <tr>
        <td>利益</td>
        <td>{{ number_format($tomonthProfit) }}円</td>
      </tr>
      <tr>
        <td>出品数</td>
        <td>{{ $tomonthProduct }}件</td>
      </tr>
      <tr>
        <td>新規ユーザー数</td>
        <td>{{ $tomonthUser }}人</td>
      </tr>
    </tbody>
  </table>

  <h1>今年の成績<span>({{ date('Y年') }})</span></h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">項目</th>
        <th scope="col">成績</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>取引件数</td>
        <td>{{ $toyearCount }}件</td>
      </tr>
      <tr>
        <td>利益</td>
        <td>{{ number_format($toyearProfit) }}円</td>
      </tr>
      <tr>
        <td>出品数</td>
        <td>{{ $toyearProduct }}件</td>
      </tr>
      <tr>
        <td>新規ユーザー数</td>
        <td>{{ $toyearUser }}人</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection