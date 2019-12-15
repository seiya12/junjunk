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
<h1>MyPage</h1>
@endsection

<!-- footer -->
@include('common.footer')