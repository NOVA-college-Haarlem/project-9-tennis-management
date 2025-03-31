<?php

namespace Database\Seeders;

use App\Models\TournamentMatch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentMatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TournamentMatch::insert([
            [
                'user_id' => 1, // Assuming a user with ID 1
                'tournament_id' => 1, // Assuming a tournament with ID 1
                'registration_date' => '2025-04-01',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Assuming a user with ID 2
                'tournament_id' => 2, // Assuming a tournament with ID 2
                'registration_date' => '2025-06-01',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
