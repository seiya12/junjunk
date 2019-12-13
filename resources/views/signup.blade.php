@extends('layout.user')

<!-- head -->
@section('title', 'Login')
@section('style')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{asset('css/bootstrap-social-gh-pages/bootstrap-social.css')}}" />
<link rel="stylesheet" href="{{asset('css/signup.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.user.header')

<!-- content -->
@section('content')
<h1 id="title">新規会員登録</h1>
<div id="signup">
    <a href="signup/form"><button type="button" class="btn btn-primary"><span class="fa fa-envelope"></span>メールで登録</button></a>
    <a href="login/google"><button type="button" class="btn btn-danger"><span class="fa fa-google"></span>Googleで登録</button></a>
    <a href="login/github"><button type="button" class="btn btn-dark"><span class="fa fa-github"></span>GitHubで登録</button></a>
</div>
@endsection

<!-- footer -->
@include('common.footer')