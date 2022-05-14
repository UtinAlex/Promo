<?php

namespace Database\Seeders;

use App\Models\Analogue;
use Illuminate\Database\Seeder;

class AnalogueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Analogue::factory()->count(20)->create();
    }
}
