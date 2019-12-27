<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements \Illuminate\Contracts\Auth\Authenticatable
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
