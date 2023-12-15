<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create top-level categories
        Category::factory()->count(5)->create();

        // Create child categories for each top-level category
        foreach (Category::all() as $category) {
            Category::factory()->count(3)->state('childCategory')->create(['parent_id' => $category->id]);
        }
    }
}
