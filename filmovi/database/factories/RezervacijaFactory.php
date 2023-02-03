<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Gledalac;
use App\Models\Film;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rezervacija>
 */
class RezervacijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'iznos' => $this->faker->numberBetween($min = 350, $max = 1000),
            'sediste' => $this->faker->numberBetween($min = 1, $max = 100),
            'nacinPlacanja' => $this->faker->randomElement($array = array('kartica', 'gotovina')),
            'gledalac_id' => Gledalac::factory(),
            'film_id' => Film::factory(),
        ];
    }
}
