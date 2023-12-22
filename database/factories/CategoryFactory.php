<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'parent_id' => null,
        ];
    }

    public function withChildren()
    {
        return $this->state(function (array $attributes) {
            return [
                'children' => CategoryFactory::count(rand(1, 3))->make(),
            ];
        });
    }
}
