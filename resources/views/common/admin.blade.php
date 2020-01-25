@section('header')
<header class="shadow-sm">
    <div class="d-flex justify-content-between mb-1">
        <a href="/admin"><img src="{{asset('img/logo.jpg')}}" alt="ロゴ画像" width=180></a>
        <div id="login_btn">
            <h1>管理画面</h1>
        </div>
    </div>
    <form action="/admin/search" method="get">
        <div class="input-group mb-2">
            <input type="search" class="form-control bg-light" placeholder="取引IDを入力" name="keyword">
            <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary">検索</button>
            </div>
        </div>
    </form>
    <nav>
        <ul class="d-flex justify-content-around">
            <li><a href="/admin" class="text-decoration-none"><img src="{{asset('img/menu.svg')}}" alt="category" class="align-middle mr-1"><span class="text-dark align-middle">営業成績</span></a></li>
            
        </ul>
    </nav>
</header>
@endsection
