<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loaisanpham extends Model
{
    protected $table = 'loaisanpham';
    protected $primaryKey = 'type_id';
    

    protected $fillable = [
        'ten_loai_san_pham',
    ];

    // Khai báo quan hệ với bảng Products
    public function products()
    {
        return $this->hasMany(Product::class, 'loai_id', 'type_id');
    }
}
