<?php

namespace Database\Factories;

use App\Models\Oder;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Oder>
 */
class OderFactory extends Factory
{
    protected $model = Oder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->numberBetween(100, 1000),
            'product_id' => $this->faker->numberBetween(1, 10),
            'user_id' => $this->faker->numberBetween(1, 10),
            'total_quantity' => $this->faker->numberBetween(1, 5),
            'oder_status_payment' => $this->faker->numberBetween(0, 1),
            'oder_status_transport' => $this->faker->numberBetween(0, 1),
            'total_discount' => $this->faker->numberBetween(0, 100),
            // Total_price calculation logic here, like subtracting total_discount from price.
            'total_price' => function (array $attributes) {
                return $attributes['price'] - $attributes['total_discount'];
            },
        ];
    }
}
