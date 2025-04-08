<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tournament::insert([
            [
                'name' => 'Spring Tennis Open',
                'description' => 'A competitive tennis tournament for all skill levels.',
                'start_date' => '2025-04-10',
                'end_date' => '2025-04-15',
                'min_skill_level' => 1,
                'max_skill_level' => 5,
                // 'format' => 'single elimination',
                'entry_fee' => 25.00,
                'status' => 'upcoming',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Summer Tennis Cup',
                'description' => 'An advanced tennis tournament with large prize money.',
                'start_date' => '2025-06-01',
                'end_date' => '2025-06-05',
                'min_skill_level' => 3,
                'max_skill_level' => 10,
                // 'format' => 'round robin',
                'entry_fee' => 50.00,
                'status' => 'upcoming',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
