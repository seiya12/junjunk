@extends('layout.user')

<!-- head -->
@section('title', 'Login')
@section('style')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{asset('css/bootstrap-social-gh-pages/bootstrap-social.css')}}" />
<link rel="stylesheet" href="{{asset('css/login.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.user.header')

<!-- content -->
@section('content')
<div id="signup">
    <a href="signup">アカウントをお持ちでない方はこちら</a>
    <a href="signup" id="signup-btn"><button type="button" class="btn btn-primary">新規会員登録</button></a>
</div>

<form id="login" action="{{ url('login')}}" method="post">
    <a href="login/google"><button type="button" class="btn btn-danger"><span class="fa fa-google"></span>Googleでログイン</button></a>
    <a href="login/github"><button type="button" class="btn btn-dark"><span class="fa fa-github"></span>GitHubでログイン</button></a>
    <div class="form-group">
        <input type="text" id="mail" class="form-control" placeholder="メールアドレス">
    </div>
    <div class="form-group">
        <input type="password" id="pass" class="form-control" placeholder="パスワード">
    </div>
    <p id="login-btn"><button type="submit" class="btn btn-danger">ログイン</button></p>
    <a href="#">パスワードをお忘れの方</a>
</form>
@endsection

<!-- footer -->
@include('common.footer')