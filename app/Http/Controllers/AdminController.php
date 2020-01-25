<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\Product;
use App\Model\Transaction;
use App\Model\User;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function index()
    {
        $todayCount =  Transaction::whereDate('created_at', '=', date('Y-m-d'))
            ->count();
        $todayProfit = Transaction::whereDate('created_at', '=', date('Y-m-d'))
            ->sum('profit');
        $todayProduct = Product::withTrashed()
            ->whereDate('created_at', '=', date('Y-m-d'))
            ->count();  
        $todayUser = User::whereDate('created_at', '=', date('Y-m-d'))
            ->count();  

        $tomonthCount =  Transaction::whereMonth('created_at', '=', date('m'))
            ->count();
        $tomonthProfit = Transaction::whereMonth('created_at', '=', date('m'))
            ->sum('profit');
        $tomonthProduct = Product::withTrashed()
            ->whereMonth('created_at', '=', date('m'))
            ->count();  
        $tomonthUser = User::whereMonth('created_at', '=', date('m'))
            ->count();

        $toyearCount =  Transaction::whereYear('created_at', '=', date('Y'))
            ->count();
        $toyearProfit = Transaction::whereYear('created_at', '=', date('Y'))
            ->sum('profit');
        $toyearProduct = Product::withTrashed()
            ->whereYear('created_at', '=', date('Y'))
            ->count();  
        $toyearUser = User::whereYear('created_at', '=', date('Y'))
            ->count();
        return view('admin', compact('todayCount','todayProfit','todayProduct','tomonthCount','tomonthProfit','tomonthProduct','toyearCount','toyearProfit','toyearProduct','todayUser','tomonthUser','toyearUser'));
    }

    public function search(Request $req)
    {
        $transaction =  Transaction::where('transaction_code','=',$req->keyword)->first();
        if (empty($transaction)){
            return redirect('admin');
        }
        return view('adminTransaction', compact('transaction'));
    }
}
