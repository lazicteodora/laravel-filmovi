<?php

namespace Database\Seeders;

use App\Models\Rezervacija;
use App\Models\Gledalac;
use App\Models\Film;
use Illuminate\Database\Seeder;

class RezervacijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gledalac = Gledalac::factory()->create();
        $film1 = Film::factory()->create();
        $film2 = Film::factory()->create();

        Rezervacija::factory(8)->create([
            'gledalac_id'=>$gledalac->id,
            'film_id'=>$film1->id
           ]);

           Rezervacija::factory(5)->create([
            'gledalac_id'=>$gledalac->id,
            'film_id'=>$film2->id
           ]);
    }
}
