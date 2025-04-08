<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $memberships = [
            [
                'user_id' => 1,
                'membership_level_id' => 1,
                'start_date' => now(),
                'end_date' => now()->addWeeks(2),
                'active' => true,
                'balance' => 20.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'membership_level_id' => 2,
                'start_date' => now(),
                'end_date' => now()->addMonths(3),
                'active' => true,
                'balance' => 50.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        foreach ($memberships as $membership) {
            Membership::create($membership);
        }
    }
}
