<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_code',
        'name',
        'sell_user_code',
        'category',
        'price',
        'description',
        'estimate',
        'sell_type',
        'end_date'
    ];

    protected $table = 'products';
}
