@extends('layout.user')

<!-- head -->
@section('title', 'Login')
@section('style')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{asset('css/bootstrap-social-gh-pages/bootstrap-social.css')}}" />
<link rel="stylesheet" href="{{asset('css/signup-form.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.user.header')

<!-- content -->
@section('content')

<form action="{{ url('/signup/form') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">氏名：</label>
        <input type="text" id="name" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="email">メールアドレス：</label>
        <input type="text" id="email" class="form-control" name="email"></input>
    </div>
    <div class="form-group">
        <label for="password">Password：</label>
        <input type="password" id="password" class="form-control" name="password">
    </div>
    <div class="form-group">
        <label for="zip-code">郵便番号(ハイフンなし)：</label>
        <input type="text" id="zip-code" class="form-control" name="zip-code">
    </div>
    <div class="form-group">
        <label for="address">住所：</label>
        <input type="text" id="address" class="form-control" name="address">
    </div>
    <p><span>「会員登録」のボタンを押すことにより、利用規約に同意したものとみなします</span></p>
    <p><button type="submit" class="btn btn-danger">会員登録</button></p>
</form>

@endsection

<!-- footer -->
@include('common.footer')