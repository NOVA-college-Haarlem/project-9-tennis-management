<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\YouthProgram;
use App\Models\YouthRegistration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YouthRegistrationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $programs = YouthProgram::all();

        if ($users->isEmpty() || $programs->isEmpty()) {
            $this->command->info('No users or programs found. Please seed users and programs first.');
            return;
        }

        $registrations = [
            [
                'parent_user_id' => $users->random()->id,
                'program_id' => $programs->random()->id,
                'child_firstname' => 'John',
                'child_lastname' => 'Doe',
                'child_age' => 8,
                'emergency_contact_phone' => '123-456-7890',
                'registration_date' => now(),
                'status' => 'pending',
            ],
            [
                'parent_user_id' => $users->random()->id,
                'program_id' => $programs->random()->id,
                'child_firstname' => 'Jane',
                'child_lastname' => 'Smith',
                'child_age' => 12,
                'emergency_contact_phone' => '987-654-3210',
                'registration_date' => now(),
                'status' => 'approved',
            ],
            [
                'parent_user_id' => $users->random()->id,
                'program_id' => $programs->random()->id,
                'child_firstname' => 'Emily',
                'child_lastname' => 'Johnson',
                'child_age' => 15,
                'emergency_contact_phone' => '555-123-4567',
                'registration_date' => now(),
                'status' => 'pending',
            ],
        ];

        foreach ($registrations as $registration) {
            YouthRegistration::create($registration);
        }
    }
}
