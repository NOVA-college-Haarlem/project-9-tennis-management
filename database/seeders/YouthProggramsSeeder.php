<?php

namespace Database\Seeders;

use App\Models\YouthProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class YouthProggramsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'name' => 'Beginner Tennis Program',
                'description' => 'A program designed for beginners to learn the basics of tennis.',
                'min_age' => 6,
                'max_age' => 10,
                'start_date' => '2025-05-01',
                'end_date' => '2025-06-30',
                'schedule' => 'Monday and Wednesday, 4:00 PM - 5:30 PM',
                'fee' => 100.00,
                'capacity' => 20,
            ],
            [
                'name' => 'Intermediate Tennis Program',
                'description' => 'For players with some experience to improve their skills.',
                'min_age' => 11,
                'max_age' => 15,
                'start_date' => '2025-05-01',
                'end_date' => '2025-07-15',
                'schedule' => 'Tuesday and Thursday, 5:00 PM - 6:30 PM',
                'fee' => 150.00,
                'capacity' => 15,
            ],
            [
                'name' => 'Advanced Tennis Program',
                'description' => 'For advanced players to refine their techniques and strategies.',
                'min_age' => 16,
                'max_age' => 18,
                'start_date' => '2025-06-01',
                'end_date' => '2025-08-15',
                'schedule' => 'Friday, 4:00 PM - 6:00 PM',
                'fee' => 200.00,
                'capacity' => 10,
            ],
        ];

        foreach ($programs as $program) {
            YouthProgram::create($program);
        }
    }
}
