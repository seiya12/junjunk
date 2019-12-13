<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function index($id)
    {
        // TODO: 商品テーブルからidに一致するレコードを取得

        // TODO: 認証済みuserテーブルからidに一致するレコードを取得
    }

    public function buy($id)
    {
        // TODO: 商品テーブルにフラグを立てる

        // TODO: ユーザの購入テーブルに追加
    }
}
