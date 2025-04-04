<?php

namespace Database\Seeders;

use App\Models\Court;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Court::insert([
            [
                'name' => 'Center Court',
                'court_type' => 'Hard',
                'court_condition' => 'Unplayable',
                'surface' => 'Acrylic',
                'indoor' => false,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Clay Court A',
                'court_type' => 'Clay',
                'court_condition' => 'Decent',
                'surface' => 'Red Clay',
                'indoor' => false,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Indoor Court 1',
                'court_type' => 'Synthetic',
                'court_condition' => 'Excellent',
                'surface' => 'Rubber',
                'indoor' => true,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
