<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Rating;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rating>
 */
class RatingFactory extends Factory
{
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->sentence(3),
            'product_id' => $this->faker->randomElement(Product::all()->pluck('id')),
            'user_id' => $this->faker->randomElement(User::all()->pluck('id')), // Replace User with your actual User model name
            'number_stars' => $this->faker->numberBetween(1, 5),
        ];
    }
}
