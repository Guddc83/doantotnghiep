<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return \Illuminate\Database\Eloquent\Factories\FactoryBuilder
     */
    public function definition(): FactoryBuilder
    {
        return $this->state([
            'name' => $this->faker->word,
            'parent_id' => null,
        ]);
    }
    public function childCategory(): FactoryBuilder
    {
        return $this->state([
            'parent_id' => function () {
                return Category::factory()->create()->id;
            },
        ]);
    }
}
