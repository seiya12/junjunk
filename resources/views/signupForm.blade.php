@extends('layout.user')

<!-- head -->
@section('title', 'SignupForm')
@section('style')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="{{asset('css/bootstrap-social-gh-pages/bootstrap-social.css')}}" />
<link rel="stylesheet" href="{{asset('css/signupForm.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.user.header')

<!-- content -->
@section('content')
<form action="{{ url('/signup/form') }}" method="post">
    {{ csrf_field() }}
    @if(session('message'))
    <p>{{ session('message') }}</p>
    @endif
    <div class="form-group">
        <label for="name">氏名：</label>
        <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required>
    </div>
    <div class="form-group">
        <label for="email">メールアドレス：</label>
        <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required>
    </div>
    <p>{{$errors->first('email')}}</p>
    <div class="form-group">
        <label for="password">Password：</label>
        <p><input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="8文字以上の英数字" pattern="^[0-9A-Za-z]+$" required></p>
    </div>
    @if($errors)
    <p>{{$errors->first('password')}}</p>
    @endif
    <div class="form-group">
        <label for="postal-code">郵便番号(ハイフンなし)：</label>
        <input type="text" id="postal_code" class="form-control" name="postal_code" value="{{ old('postal_code') }}" maxlength="7" pattern="^[0-9]+$" required>
    </div>
    @if($errors)
    <p>{{$errors->first('postal_code')}}</p>
    @endif
    <div class="form-group">
        <label for="prefectures">県：</label>
        <select id="prefectures" class="form-control" name="prefectures" value="{{ old('prefectures') }}">
            <option value="東京都">東京都</option>
            <option value="大阪府">大阪府</option>
            <option value="福岡県">福岡県</option>
        </select>
    </div>
    <p>{{$errors->first('prefectures')}}</p>
    <div class="form-group">
        <label for="address">住所：</label>
        <input type="text" id="street_address" class="form-control" name="street_address" value="{{ old('street_address') }}" required>
    </div>
    <p>{{$errors->first('street_address')}}</p>
    <div class="form-group">
        <label for="account_name">ユーザネーム：</label>
        <input type="text" id="account_name" class="form-control" name="account_name" value="{{ old('account_name') }}" placeholder="3文字以上の英数字" maxlength="20" required>
    </div>
    <p>{{$errors->first('account_name')}}</p>
    <p><span>「会員登録」のボタンを押すことにより、利用規約に同意したものとみなします</span></p>
    <p><button type="submit" class="btn btn-danger">会員登録</button></p>
</form>

@endsection

<!-- footer -->
@include('common.user.footer')