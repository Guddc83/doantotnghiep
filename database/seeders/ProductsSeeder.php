<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();

        // Tạo dữ liệu mẫu cho bảng products
        foreach ($categories as $category) {
            Product::factory()
                ->count(10) // Số lượng sản phẩm mỗi danh mục
                ->create([
                    'category_id' => $category->id,
                ]);
        }
    }
}
