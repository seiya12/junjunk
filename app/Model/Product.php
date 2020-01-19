<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'product_code',
        'name',
        'sell_user_code',
        'category',
        'price',
        'description',
        'estimate',
        'sell_type',
        'end_date',
        'deleted_at'
    ];

    protected $table = 'products';
}
