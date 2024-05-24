<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = 'donhang';
    protected $primaryKey = 'order_id';
    
    protected $fillable = [
        'user_id', 
        'tong_gia', 
        'ngay_dat_hang', 
        'trang_thai'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id')
                    ->withPivot('quantity', 'price');
    }

    public $timestamps = false;
}
