<?php

namespace Database\Seeders;

use App\Models\MembershipLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $membershipLevels = [
            [
                'name' => 'Basic',
                'description' => 'Basic membership with limited access.',
                'duration' => 2,
                'duration_unit' => 'week',
                'price' => 20.00,
                'max_booking_days_ahead' => 7,
                'max_booking_hours' => 4,
                'allow_guests' => false,
                'access_competitions' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium',
                'description' => 'Premium membership with additional benefits.',
                'duration' => 3,
                'duration_unit' => 'month',
                'price' => 50.00,
                'max_booking_days_ahead' => 14,
                'max_booking_hours' => 12,
                'allow_guests' => true,
                'access_competitions' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VIP',
                'description' => 'VIP membership with all-inclusive access.',
                'duration' => 1,
                'duration_unit' => 'year',
                'price' => 100.00,
                'max_booking_days_ahead' => 30,
                'max_booking_hours' => 24,
                'allow_guests' => true,
                'access_competitions' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach($membershipLevels as $membershipLevel){
            MembershipLevel::create($membershipLevel);
        }
    }
}
