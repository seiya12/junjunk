<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    // TODO: DBからデータを取得
    public function index()
    {
        return view('top');
    }
}
