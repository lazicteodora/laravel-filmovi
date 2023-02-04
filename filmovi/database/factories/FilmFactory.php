<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;



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
        $this ->faker->addProvider(new \Xylis\FakerCinema\Provider\Movie($this ->faker));
        return [
            'naziv' => $this->faker->movie(),
            'zanr' => $this->faker->movieGenre(),
            'brojSale' => $this->faker->numberBetween($min = 1, $max = 10),
            'nacinPrevodjenja' => $this->faker->randomElement($array = array('SINHRONIZOVANO', 'TITLOVANO')),
        ];
    }
}
