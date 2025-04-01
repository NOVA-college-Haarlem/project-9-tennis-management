<?php

namespace Database\Seeders;

use App\Models\Competition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Competition::insert([
            [
                'name' => 'Spring Championship',
                'description' => 'Annual spring tennis championship open to all levels.',
                'start_date' => '2025-03-01',
                'end_date' => '2025-05-31',
                'status' => 'upcoming',
                'min_skill_level' => 1,
                'max_skill_level' => 5,
                'format' => 'round-robin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Summer Open',
                'description' => 'Open tournament for all skill levels during the summer.',
                'start_date' => '2025-06-01',
                'end_date' => '2025-08-31',
                'status' => 'upcoming',
                'min_skill_level' => 1,
                'max_skill_level' => 5,
                'format' => 'knockout',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fall League',
                'description' => 'Competitive league for intermediate to advanced players.',
                'start_date' => '2025-09-01',
                'end_date' => '2025-11-30',
                'status' => 'upcoming',
                'min_skill_level' => 3,
                'max_skill_level' => 5,
                'format' => 'round-robin',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
