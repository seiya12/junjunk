<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImageUrl extends Model
{
    protected $fillable = ['product_code', 'url'];
    protected $table = 'image_url';
}
