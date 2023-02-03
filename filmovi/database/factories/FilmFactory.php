<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Xylis\FakerCinema\Provider\Movie;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->movie(),
            'zanr' => $this->faker->movieGenre(),
            'brojSale' => $this->faker->numberBetween($min = 1, $max = 10),
            'nacinPrevodjenja' => $this->$this->faker->randomElement($array = array('SINHRONIZOVANO', 'TITLOVANO')),
        ];
    }
}
