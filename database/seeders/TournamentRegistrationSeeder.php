<?php

namespace Database\Seeders;

use App\Models\TournamentRegistration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TournamentRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TournamentRegistration::insert([
            [
                'tournament_id' => 1, // Assuming a tournament with ID 1
                'court_id' => null, // No court assigned
                'scheduled_time' => '2025-04-10 10:00:00',
                'player1_id' => 1, // Assuming a user with ID 1
                'player2_id' => 2, // Assuming a user with ID 2
                'score' => null, // Match not completed yet
                'status' => 'scheduled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
