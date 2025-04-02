<?php

namespace Database\Seeders;

use App\Models\CompetitionMatch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitionMatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompetitionMatch::insert([
            [
                'competition_id' => 1,
                'court_id' => 1,
                'team1_id' => 1,
                'team2_id' => 2,
                'scheduled_time' => '2025-04-01 12:00:00',
                'status' => 'scheduled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'competition_id' => 2,
                'court_id' => 2,
                'team1_id' => 1,
                'team2_id' => 2,
                'scheduled_time' => '2025-04-02 12:00:00',
                'status' => 'scheduled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    } 
}
