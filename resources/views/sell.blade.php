@extends('layout.layout')

<!-- head -->
@section('title', '出品')
@section('style')
<link rel="stylesheet" href="{{asset('css/sell.css')}}" />
@endsection
@include('common.head')

<!-- header -->
@include('common.header')

<!-- content -->
@section('content')
<h1 id="title">商品の情報を入力</h1>
<form action="/sell" method="POST" id="sell-form" enctype="multipart/form-data">
    {{ csrf_field() }}

    @if($errors)
    <p id="error">{{$errors->first('file')}}</p>
    @endif
    <label>出品画像</label>
    <p><input type="file" name="file[]" multiple></p>

    @if($errors)
    <p id="error">{{$errors->first('name')}}</p>
    @endif
    <label>商品名</label>
    <p><input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="商品名（必須４０文字まで）"></p>

    @if($errors)
    <p id="error">{{$errors->first('description')}}</p>
    @endif
    <label>商品の説明</label>
    <p><textarea name="description" rows="6" placeholder="商品の説明（必須 1,000文字以内）（色、素材、重さ、定価、注意点など）例）2010年頃に1万円で購入したジャケットです。ライトグレーで傷はありません。あわせやすいのでおすすめです。"></textarea></p>

    @if($errors)
    <p id="error">{{$errors->first('category')}}</p>
    @endif
    <label>カテゴリ</label>
    <p>
        <select name="category">
            <option value="">-</option>
            <option value="GM">ゲーム</option>
            <option value="CA">カメラ</option>
            <option value="WC">腕時計</option>
            <option value="MI">楽器</option>
            <option value="MP">携帯電話</option>
            <option value="SF">ソフト</option>
            <option value="AD">オーディオ</option>
            <option value="PC">パソコン</option>
            <option value="TV">テレビ</option>
            <option value="FT">家具</option>
            <option value="VL">乗り物</option>
            <option value="ET">その他</option>
        </select>
    </p>

    <label>状態</label>
    <p>
        <input type="checkbox" name="status[]" value="破損">破損
        <input type="checkbox" name="status[]" value="水没">水没
        <input type="checkbox" name="status[]" value="動作不良">動作不良
        <input type="checkbox" name="status[]" value="部品欠損">部品欠損
    </p>

    @if($errors)
    <p id="error">{{$errors->first('estimate')}}</p>
    @endif
    <label>発送までの日数</label>
    <p>
        <select name="estimate">
            <option value="">-</option>
            <option value="1~2">1~2日で発送</option>
            <option value="2~3">2~3日で発送</option>
            <option value="4~7">4~7日で発送</option>
        </select>
    </p>

    <label>出品・リクエストモード</label>
    <p>
        <select name="mode">
            <option value="">-</option>
            <option value="F">フリマ出品</option>
            <option value="O">オークション出品</option>
            <option value="R">修理リクエスト</option>
        </select>
    </p>

    @if($errors)
    <p id="error">{{$errors->first('price')}}</p>
    @endif
    <div id="price">
        <label>販売価格</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="text1a">¥</span>
            </div><input type="number" name="price" value="{{ old('price') }}" class="form-control" placeholder="例）300">
        </div>
    </div>

    <div id="warn">
        <p>禁止されている出品、行為を必ずご確認ください。</p>
        <p>また、ブランド品でシリアルナンバー等がある場合はご記載ください。偽ブランドの販売は犯罪であり処罰される可能性があります。</p>
        <p>出品をもちまして加盟店規約に同意したことになります。</p>
    </div>

    <a href=""><button type="submit" class="btn btn-danger">出品する</button></a>
</form>
<div id="back-outer">
    <a href=""><button type="button" class="btn btn-outline-secondary" id="back-btn">戻る</button></a>
</div>
@endsection

<!-- footer -->
@include('common.footer')