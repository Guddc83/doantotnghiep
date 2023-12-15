<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'name',
        'description',
        'content',
        'avartar',
        'status',
        'hot',
        'price',
        'sale',
        'total_pay',
        'total_stars',
    ];

    // Relations
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Phương thức tùy chọn
    public function getPriceWithSale(): float
    {
        return $this->price - ($this->price * $this->sale / 100);
    }
}
