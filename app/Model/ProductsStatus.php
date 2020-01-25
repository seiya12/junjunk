<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductsStatus extends Model
{
    protected $fillable = [
        'id',
        'product_code',
        'status',
    ];

    protected $table = 'products_status';
}
