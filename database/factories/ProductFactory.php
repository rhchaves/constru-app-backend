<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->unique()->name(),
            // 'label' => $this->faker->unique()->company(),
            // 'description' => $this->faker->randomNumber(),
            // 'category' => $this->faker->unique()->userName(),
            // 'price' => $this->faker->unique()->freeEmail(),
            // 'productMark' => $this->faker->password(), // password
            // 'img' => $this->faker->imageUrl(360, 360, 'animals', true),
        ];
    }
}
