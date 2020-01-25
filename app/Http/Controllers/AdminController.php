<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Product;
use App\Model\Transaction;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function index()
    {
        $todayCount =  Transaction::whereDate('created_at', '=', date('Y-m-d'))
            ->count();
        $todayProfit = Transaction::whereDate('created_at', '=', date('Y-m-d'))
            ->sum('profit');
        return view('admin', compact('todayCount','todayProfit'));
    }
}
