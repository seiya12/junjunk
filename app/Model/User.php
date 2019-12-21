<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'user_code',
        'email',
        'password',
        'name',
        'postal_code',
        'prefectures',
        'street_address',
        'account_name',
    ];

    protected $table = 'users';
}
