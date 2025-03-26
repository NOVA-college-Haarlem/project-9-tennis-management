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
        $bookings = [
            [
                // 'user_id' => $user->id,
                // 'court_id' => $court->id,
                'start_time' => '2025-03-26 08:00:00',
                'end_time' => '2025-03-26 09:00:00',
                'status' => 'approved',
                'booking_type' => 'Regular',
            ],
            [
                // 'user_id' => $user->id,
                // 'court_id' => $court->id,
                'start_time' => '2025-03-26 09:00:00',
                'end_time' => '2025-03-26 10:00:00',
                'status' => 'pending',
                'booking_type' => 'Tournament',
            ],
            [
                // 'user_id' => $user->id,
                // 'court_id' => $court->id,
                'start_time' => '2025-03-26 10:00:00',
                'end_time' => '2025-03-26 11:00:00',
                'status' => 'approved',
                'booking_type' => 'Training',
            ],
        ];

        Booking::insert($bookings);

    }
}
