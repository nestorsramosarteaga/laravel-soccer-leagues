<?php

namespace Database\Seeders;

use App\Models\Federation;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FederationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Federation::insert([
            ['name' => 'Fédération Internationale de Football Association', 'abbreviation' => 'FIFA', 'created_at' => Carbon::now()],
            ['name' => 'Confederación Asiática de Fútbol', 'abbreviation' => 'AFC', 'created_at' => Carbon::now()],
            ['name' => 'Confederación Africana de Fútbol', 'abbreviation' => 'CAF', 'created_at' => Carbon::now()],
            ['name' => 'Confederación de Norteamérica, Centroamérica y el Caribe', 'abbreviation' => 'CONCACAF', 'created_at' => Carbon::now()],
            ['name' => 'Confederación Sudamericana de Fútbol', 'abbreviation' => 'CONMEBOL', 'created_at' => Carbon::now()],
            ['name' => 'Confederación de Fútbol de Oceanía', 'abbreviation' => 'OFC', 'created_at' => Carbon::now()],
            ['name' => 'Unión de Asociaciones Europeas de Fútbol', 'abbreviation' => 'UEFA', 'created_at' => Carbon::now()],
            ['name' => 'Comité Olimpico Internacional', 'abbreviation' => 'COI', 'created_at' => Carbon::now()]
        ]);
    }
}
