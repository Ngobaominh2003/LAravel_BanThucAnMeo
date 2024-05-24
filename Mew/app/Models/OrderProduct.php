<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(DonHang::class, 'order_id', 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
