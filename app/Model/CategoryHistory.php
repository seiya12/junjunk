<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class CategoryHistory extends Model
{
    //
    protected $fillable = ['category'];
    protected $table = 'category_histories';

}
