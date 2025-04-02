<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Equipment::insert([
            [
                'name' => 'Tennis Racket',
                'type' => 'racket',
                'condition' => 'good',
                'available' => true,
                'rental_fee' => 5.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tennis Ball',
                'type' => 'ball',
                'condition' => 'new',
                'available' => true,
                'rental_fee' => 1.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tennis Net',
                'type' => 'net',
                'condition' => 'good',
                'available' => true,
                'rental_fee' => 10.00,
                'created_at' => now(),
                'updated_at' => now()
            ],  
        ]);
    }
}
