@extends('layout.layout')

<!-- head -->
@section('title', 'Top')
@section('style')
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<p>top-content</p>
@endsection

<!-- footer -->
@include('common.footer')