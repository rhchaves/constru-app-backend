<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'fantasyName' => $this->faker->company(),
            'corporateName' => $this->faker->unique()->company(),
            'cnpj' => $this->faker->randomNumber(),
            'nameLogin' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->freeEmail(),
            'password' => $this->faker->password(), // password
            'deliveryDistance' => $this->faker->randomNumber(),
            'phone' => $this->faker->unique()->e164PhoneNumber(),
            // 'phone' => $this->faker->unique()->landlineNumber(false),

            // endereço provisóriamente nessa seeder
            'cep' => $this->faker->postcode(),
            'street' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
            'complement' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'district' => $this->faker->citySuffix(),
            'state' => $this->faker->stateAbbr(),

            'email_verified_at' => now(),
            'status' => $this->faker->randomNumber(),
        ];
    }
}
