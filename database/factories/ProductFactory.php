<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //User::truncate(); xoa du lieu ng dung
        return [
            'category_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'content' => $this->faker->word,
            'avartar' => $this->faker->imageUrl(),
            'status' => $this->faker->numberBetween(0, 1),
            'hot' => $this->faker->numberBetween(0, 1),
            'price' => $this->faker->numberBetween(50000, 10000000),
            'sale' => $this->faker->numberBetween(0, 50),
            'total_pay' => $this->faker->numberBetween(10, 100),
            'total_stars' => $this->faker->numberBetween(0, 5),
        ];
    }
}
