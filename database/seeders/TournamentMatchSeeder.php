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
                'player1_id' => 1, 
                'player2_id' => 2,               
                'tournament_id' => 1, 
                'scheduled_time' => '2025-04-01 15:30:00',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'player1_id' => 1, 
                'player2_id' => 2, 
                'tournament_id' => 2, 
                'scheduled_time' => '2025-06-01 18:45:00',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
    }
}
