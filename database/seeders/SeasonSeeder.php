<?php

namespace Database\Seeders;

use App\Models\Season;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Season::insert([
            ['name' => '2024-2025', 'initial_year' => 2024, 'final_year' => 2025, 'created_at' => Carbon::now()],
            ['name' => '2024', 'initial_year' => 2024, 'final_year' => 2024, 'created_at' => Carbon::now()]
        ]);
    }
}
