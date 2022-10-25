<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street_name' => $this->faker->streetName(),
            'street_number' => $this->faker->buildingNumber(),
            'street_type' => $this->faker->streetSuffix(),
            'zip_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'state' => $this->faker->stateAbbr()
        ];
    }
}