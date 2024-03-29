<?php

namespace App\Models;

use App\Traits\ModelScopes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ModelScopes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name', 
        'email',
        'gender',
        'dob',
        'phone',
        'address',
        'city',
        'state',
        'country',
        'height',
        'hair',
        'eye',
        'bust',
        'waist',
        'shoe',
        'profile_image',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the user's gallaries.
     */

    // public function gallaries()
    // {
    //     return $this->belongsTo('App\Models\Gallery', 'user_id');
        
    // }

    public function gallaries()
    {
        return $this->hasMany('App\Models\Gallery','user_id');
    }
}
