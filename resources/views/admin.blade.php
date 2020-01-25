@extends('layout.layout')

<!-- head -->
@section('title', 'Admin')
@section('style')
<link rel="stylesheet" href="{{asset('css/admin.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<div id="title">営業成績表示</div>
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
        <td>{{ $todayCount }}件</td>
      </tr>
      <tr>
        <td>利益</td>
        <td>{{ number_format($todayProfit) }}円</td>
      </tr>
    </tbody>
  </table>
</div>
@endsection
<!-- footer -->
@include('common.footer')