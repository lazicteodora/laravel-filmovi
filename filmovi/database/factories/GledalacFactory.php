<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gledalac>
 */
class GledalacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imePrezime' => $this->faker->name(),
            'brojTelefona' => $this->faker->phoneNumber(),
            'godine' => $this->faker->numberBetween($min = 10, $max = 90),
        ];
    }
}
