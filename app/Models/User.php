<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;



    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $guarded = [];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function orders()
    {
        $this->hasMany(Order::class);
    }


//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];
}
