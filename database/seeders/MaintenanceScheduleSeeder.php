<?php

namespace Database\Seeders;

use App\Models\MaintenanceSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaintenanceScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MaintenanceSchedule::insert([
            [
                'court_id' => 1,
                'start_time' => '2025-04-01 08:00:00',
                'end_time' => '2025-04-01 12:00:00',
                'status' => 'scheduled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
