<?php

namespace App\Models;

use App\Http\Controllers\client\ProductController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories'; // Đảm bảo tên bảng chính xác
    protected $fillable = [
        'name',
        'description',
        'avartar',
        'status',
        'hot',
    ];

    // Phương thức tùy chọn
    public function isActive(): bool
    {
        return $this->status === 1;
    }

    public function isHot(): bool
    {
        return $this->hot === 1;
    }

    public function products()
    {
        return $this->hasMany(Category::class);
    }
}
