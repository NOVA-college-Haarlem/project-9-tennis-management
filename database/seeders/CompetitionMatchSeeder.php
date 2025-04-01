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
                'name' => 'Match 1',
                'captain_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'competition_id' => 2,
                'name' => 'Match 2',
                'captain_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
