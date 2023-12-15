<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

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
        ];
    }
}
