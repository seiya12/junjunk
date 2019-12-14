@section('header')
<header class="shadow-sm">
    <div class="d-flex justify-content-between mb-1">
        <a href="/"><img src="{{asset('img/logo.jpg')}}" alt="ロゴ画像" width=180></a>
        <div id="login_btn">
            <a href="{{ action('AuthController@signup') }}"><button type="button" class="btn btn-danger">新規会員</button></a>
            <a href="{{ action('AuthController@login') }}"><button type="button" class="btn btn-outline-primary">ログイン</button></a>
        </div>
    </div>
    <form action="" method="get">
        <div class="input-group mb-2">
            <input type="search" class="form-control bg-light" placeholder="何をお探しですか？">
            <div class="input-group-append">
                <button type="button" class="btn btn-outline-secondary">検索</button>
            </div>
        </div>
    </form>
    <nav>
        <ul class="d-flex justify-content-around">
            <li><a href="#" class="text-decoration-none"><img src="{{asset('img/menu.svg')}}" alt="category" class="align-middle mr-1"><span class="text-dark align-middle">カテゴリから探す</span></a></li>
            <li><a href="#" class="text-decoration-none"><img src="{{asset('img/local_offer.svg')}}" alt="tag" class="align-middle mr-1"><span class="text-dark align-middle">マッチングサービス</span></a></li>
        </ul>
    </nav>
</header>
@endsection