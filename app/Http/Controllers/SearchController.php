<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class SearchController extends Controller
{
    public function search(Request $req)
    {
        $keyword = $req->keyword;
        $sort = $req->sort;
        $category = $req->category;
        $price = [
            'min' => $req->min_price,
            'max' => $req->max_price,
        ];
        $min_price = $req->min_price;
        $max_price = $req->max_price;

        if ($sort === 'price-asc') {
            $products = Product::where('name', 'LIKE', "%$keyword%")
                ->when($category, function ($query, $category) {
                    return $query->where('category', $category);
                }, function ($query) {
                    return $query;
                })
                ->when($price['min'] && $price['max'], function ($query, $price) {
                    return $query->whereBetween('price', [$price['min'], $price['max']]);
                }, function ($query) {
                    return $query;
                })
                ->orderBy('created_at', 'desc')
                ->orderBy('price', 'asc')->get(['product_code', 'name', 'price', 'sell_user_code','sell_type']);

            return view('search', compact('products', 'keyword', 'sort', 'category', 'min_price', 'max_price'));
        } elseif ($sort === 'price-desc') {
            $products = Product::where('name', 'LIKE', "%$keyword%")
                ->when($category, function ($query, $category) {
                    return $query->where('category', $category);
                }, function ($query) {
                    return $query;
                })
                ->when($price['min'] && $price['max'], function ($query, $price) {
                    return $query->whereBetween('price', [$price['min'], $price['max']]);
                }, function ($query) {
                    return $query;
                })
                ->orderBy('created_at', 'desc')
                ->orderBy('price', 'desc')->get(['product_code', 'name', 'price', 'sell_user_code','sell_type']);

            return view('search', compact('products', 'keyword', 'sort', 'category', 'min_price', 'max_price'));
        } elseif ($sort === 'created-asc') {
            $products = Product::where('name', 'LIKE', "%$keyword%")
                ->when($category, function ($query, $category) {
                    return $query->where('category', $category);
                }, function ($query) {
                    return $query;
                })
                ->when($price['min'] && $price['max'], function ($query, $price) {
                    return $query->whereBetween('price', [$price['min'], $price['max']]);
                }, function ($query) {
                    return $query;
                })
                ->orderBy('created_at', 'desc')->get(['product_code', 'name', 'price', 'sell_user_code','sell_type']);

            return view('search', compact('products', 'keyword', 'sort', 'category', 'min_price', 'max_price'));
        } else {
            $products = Product::where('name', 'LIKE', "%$keyword%")
                ->when($category, function ($query, $category) {
                    return $query->where('category', $category);
                }, function ($query) {
                    return $query;
                })
                ->when($price['min'] && $price['max'], function ($query, $price) {
                    return $query->whereBetween('price', [$price['min'], $price['max']]);
                }, function ($query) {
                    return $query;
                })
                ->orderBy('created_at', 'desc')
                ->get(['product_code', 'name', 'price', 'sell_user_code','sell_type']);

            return view('search', compact('products', 'keyword', 'sort', 'category', 'min_price', 'max_price'));
        }
    }
}
