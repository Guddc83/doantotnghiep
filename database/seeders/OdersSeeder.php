<?php

namespace Database\Seeders;

use App\Models\Oder;
use App\Models\Product;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OdersSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();
        foreach ($users as $user) {
            Oder::factory()
                ->count(10) // Số lượng sản phẩm mỗi danh mục
                ->create([
                    'user_id' => $user->id,
                ]);
        }

        $products = Product::all();
        foreach ($products as $product) {
            Oder::factory()
                ->count(10) // Số lượng sản phẩm mỗi danh mục
                ->create([
                    'product_id' => $product->id,
                ]);
        }
    }
}
