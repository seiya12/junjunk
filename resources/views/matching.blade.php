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

@endsection

<!-- footer -->
@include('common.footer')