<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'prefecture',
        'warehouse',
        'warehouse_code'
    ];

    protected $table = 'warehouses';
}
