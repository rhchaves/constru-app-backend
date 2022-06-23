<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'cpf' => $this->faker->randomNumber(),
            'email' => $this->faker->unique()->freeEmail(),
            'nameLogin' => $this->faker->unique()->userName(),
            'password' => $this->faker->password(), // password
            'phone' => $this->faker->unique()->e164PhoneNumber(),
            'email_verified_at' => now(),
        ];
    }
}
