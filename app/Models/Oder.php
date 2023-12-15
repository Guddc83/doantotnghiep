<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;
    protected $table = 'oders';
    protected $fillable = [
        'price',
        'product_id',
        'user_id',
        'total_quantity',
        'oder_status_payment',
        'oder_status_transport',
        'total_discount',
        'total_price',
    ];

    // Relations
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Replace User with your actual User model name
    }

    // Phương thức tính tổng giá sau khi giảm giá
    public function getTotalPriceWithDiscount(): int
    {
        return $this->price - $this->total_discount;
    }
}
