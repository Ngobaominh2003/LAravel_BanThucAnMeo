<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    

    protected $fillable = [
        'ten_san_pham', 'mo_ta', 'gia', 'hinh_anh', 'khoi_luong', 'so_luong', 'loai_id'
    ];

    // Khai báo quan hệ với bảng LoaiSanPham
    public function loaisanpham()
    {
        return $this->belongsTo(Loaisanpham::class, 'loai_id', 'type_id');
    }
    public $timestamps = false;
}
