<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'transaction_code',
        'seller_code',
        'buyer_code',
        'product_code',
        'warehouse_code',
        'profit',
        'status',
        'cancel_flg',
    ];

    protected $table = 'transactions';
}
