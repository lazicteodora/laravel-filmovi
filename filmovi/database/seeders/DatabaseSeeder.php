<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RezervacijaSeeder;
use Database\Seeders\GledalacSeeder;
use Database\Seeders\FilmSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $FilmSeeder = new FilmSeeder;
        $FilmSeeder->run();

        $GledalacSeeder = new GledalacSeeder;
        $GledalacSeeder->run();

        $RezervacijaSeeder = new RezervacijaSeeder;
        $RezervacijaSeeder->run();
    }
}
