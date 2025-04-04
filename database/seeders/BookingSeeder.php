<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::insert([
            [
                'user_id' => 1,
                'court_id' => 1,
                'start_time' => '2025-03-26 08:00:00',
                'end_time' => '2025-03-26 09:00:00',
                'status' => 'confirmed',
                'booking_type' => 'Regular',
            ],
            [
                'user_id' => 2,
                'court_id' => 2,
                'start_time' => '2025-03-26 09:00:00',
                'end_time' => '2025-03-26 10:00:00',
                'status' => 'pending',
                'booking_type' => 'Tournament',
            ],
        ]);
    }
}
