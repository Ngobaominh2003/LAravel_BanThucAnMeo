<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'address',
        'role',
        'remember_token',
        'avatar',
    ];

    public $timestamps = false;

    public function carts()
    {
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }

    public function orders()
    {
        return $this->hasMany(DonHang::class, 'user_id', 'id');
    }
}
