@extends('layout.layout')

<!-- head -->
@section('title', '取引番号')
@section('style')
<link rel="stylesheet" href="{{asset('css/transaction.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<h1 id="title">取引番号発行</h1>
<article>
    <h2>ご利用ありがとうございました。</h2>
    <p>お取引番号は</p>
    <h3>{{ $transaction_code }}</h3>
    <p>です。</p>
</article>
@endsection

<!-- footer -->
@include('common.footer')