<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $fillable = [
        'email','token'
    ];


    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
