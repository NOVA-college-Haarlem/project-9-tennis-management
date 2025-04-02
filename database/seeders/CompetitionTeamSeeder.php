<?php

namespace Database\Seeders;

use App\Models\CompetitionTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitionTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompetitionTeam::insert([
            [
                // 'court_id' => 1,
                'competition_id' => 1,
                'name' => 'kuku',
                'captain_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'court_id ' => 2,
                'competition_id' => 2,
                'name' => 'kiki',
                'captain_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
