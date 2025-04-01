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
                'user_id' => 1, 
                'tournament_id' => 1, 
                'status' => 'registered',
                'registration_date'  => '2025-04-01',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
