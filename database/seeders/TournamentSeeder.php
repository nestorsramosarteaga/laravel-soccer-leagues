<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tournament::insert([
            ['name' => 'Champion League', 'commercial_name' => null, 'country_id' => null, 'federation_id' => 7, 'created_at' => Carbon::now()],
            ['name' => 'Europa League', 'commercial_name' => null, 'country_id' =>  null,'federation_id' => 7, 'created_at' => Carbon::now()],
            ['name' => 'Premier League', 'commercial_name' => null, 'country_id' => 251, 'federation_id' => null, 'created_at' => Carbon::now()],
            ['name' => 'Serie A', 'commercial_name' => null, 'country_id' => 107, 'federation_id' => null, 'created_at' => Carbon::now()],
            ['name' => 'La Liga', 'commercial_name' => null, 'country_id' => 207, 'federation_id' => null, 'created_at' => Carbon::now()],
            ['name' => 'Ligue 1', 'commercial_name' => null, 'country_id' => 75, 'federation_id' => null, 'created_at' => Carbon::now()],
            ['name' => 'Bundesliga', 'commercial_name' => null, 'country_id' => 82, 'federation_id' => null, 'created_at' => Carbon::now()],
            ['name' => 'Eredivisie', 'commercial_name' => null, 'country_id' => 156, 'federation_id' => null, 'created_at' => Carbon::now()],
            ['name' => 'Jupiler Pro League', 'commercial_name' => null, 'country_id' => 22, 'federation_id' => null, 'created_at' => Carbon::now()],
            ['name' => 'Copa Libertadores de América', 'commercial_name' => null, 'country_id' => null, 'federation_id' => 5, 'created_at' => Carbon::now()],
            ['name' => 'Copa Sudamericana', 'commercial_name' => null, 'country_id' => null, 'federation_id' => 5, 'created_at' => Carbon::now()],
            ['name' => 'MLS', 'commercial_name' => null, 'country_id' => null, 'federation_id' => null, 'created_at' => Carbon::now()],
            ['name' => 'Brasileirao A', 'commercial_name' => 'Betano', 'country_id' => 30, 'federation_id' => null, 'created_at' => Carbon::now()],
            ['name' => 'Copa de la Liga Profesional', 'commercial_name' => 'Betano', 'country_id' =>10, 'federation_id' => null, 'created_at' => Carbon::now()],
        ]);
    }
}
