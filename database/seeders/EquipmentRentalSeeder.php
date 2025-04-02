<?php

namespace Database\Seeders;

use App\Models\EquipmentRental;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentRentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EquipmentRental::insert([
            [
                'user_id' => 1,
                'equipment_id' => 1,
                'start_time' => '2025-04-01 08:00:00',
                'end_time' => '2025-04-01 014:00:00',
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'equipment_id' => 2,
                'start_time' => '2025-06-01 18:45:00',
                'end_time' => '2025-06-01 19:45:00',
                'status' => 'reserved',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
