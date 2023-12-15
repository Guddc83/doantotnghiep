<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        foreach ($users as $user) {
            Comment::factory()
                ->count(10) // Số lượng sản phẩm mỗi danh mục
                ->create([
                    'user_id' => $user->id,
                ]);
        }

        $products = Product::all();
        foreach ($products as $product) {
            Comment::factory()
                ->count(10) // Số lượng sản phẩm mỗi danh mục
                ->create([
                    'user_id' => $product->id,
                ]);
        }
    }
}
