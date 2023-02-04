<?php

namespace Database\Seeders;

use App\Models\Gledalac;
use Illuminate\Database\Seeder;

class GledalacSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gledalac = Gledalac::factory()->create();
    }
}
