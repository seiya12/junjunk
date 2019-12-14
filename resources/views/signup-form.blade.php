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
        <input type="text" id="name" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">メールアドレス：</label>
        <input type="email" id="email" class="form-control" name="email" pattern="^[0-9A-Za-z]+$" required>
    </div>
    <div class="form-group">
        <label for="password">Password：</label>
        <input type="password" id="password" class="form-control" name="password" pattern="^[0-9A-Za-z]+$" required>
    </div>
    <div class="form-group">
        <label for="zip-code">郵便番号(ハイフンなし)：</label>
        <input type="text" id="postal_code" class="form-control" name="postal_code" max="7" 　pattern="^[0-9]+$" required>
    </div>
    <div class="form-group">
        <label for="prefectures">県：</label>
        <select id="prefectures" class="form-control" name="prefectures">
            <option value="東京都">東京都</option>
            <option value="大阪府">大阪府</option>
            <option value="福岡県">福岡県</option>
        </select>
    </div>
    <div class="form-group">
        <label for="address">住所：</label>
        <input type="text" id="street_address" class="form-control" name="street_address" required>
    </div>
    <div class="form-group">
        <label for="address">ユーザネーム：</label>
        <input type="text" id="account_name" class="form-control" name="account_name" required>
    </div>
    <p><span>「会員登録」のボタンを押すことにより、利用規約に同意したものとみなします</span></p>
    <p><button type="submit" class="btn btn-danger">会員登録</button></p>
</form>

@endsection

<!-- footer -->
@include('common.footer')