<?php

namespace Database\Seeders;

use App\Models\League;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LeagueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        League::insert([
            ['name' => 'Champion League', 'created_at' => Carbon::now()],
            ['name' => 'Europa League', 'created_at' => Carbon::now()],
            ['name' => 'Premier League', 'created_at' => Carbon::now()],
            ['name' => 'Serie A', 'created_at' => Carbon::now()],
            ['name' => 'La Liga', 'created_at' => Carbon::now()],
            ['name' => 'Ligue 1', 'created_at' => Carbon::now()],
            ['name' => 'Bundesliga', 'created_at' => Carbon::now()],
            ['name' => 'Eredivisie', 'created_at' => Carbon::now()],
            ['name' => 'Jupiler Pro League', 'created_at' => Carbon::now()],
            ['name' => 'Copa Libertadores de América', 'created_at' => Carbon::now()],
            ['name' => 'Copa Sudamericana', 'created_at' => Carbon::now()],
            ['name' => 'MLS', 'created_at' => Carbon::now()],
            ['name' => 'Brasileirao A', 'created_at' => Carbon::now()],
            ['name' => 'Copa de la Liga Profesional', 'created_at' => Carbon::now()],
        ]);
    }
}
