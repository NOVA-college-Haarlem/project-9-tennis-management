<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'firstname' => 'Ahmed',
                'lastname' => 'Al-Ghurbani',
                'email' => 'ahmed@gmail.com',
                'phonenumber' => '0645678901',
                'availability' => 'Monday, Tuesday, Wednesday',
                'date_of_birth' => '16-08-2006',
                'skill_level' => 675,
                'street' => 'Kerkstraat',
                'housenumber' => '2',
                'postal_code' => '1203AB',
                'city' => 'Amsterdam',
                'role' => 'coach',
                'password' => bcrypt('ahmed12345'),
            ],
            [
                'firstname' => 'Ferdy',
                'lastname' => 'van Klink',
                'email' => 'efveka@gmail.com',
                'phonenumber' => '0620416076',
                'availability' => 'Monday, Tuesday, Wednesday, Thursday, Friday',
                'date_of_birth' => '31-10-2007',
                'skill_level' => 450,
                'street' => 'Tarweland',
                'housenumber' => '15',
                'postal_code' => '1991 PL',
                'city' => 'Haarlem',
                'role' => 'coach',
                'password' => bcrypt('Ferdy2001'),
            ],
            [
                'firstname' => 'Pieter',
                'lastname' => 'vna Dijk',
                'email' => 'pieter@gmail.com',
                'phonenumber' => '0645678953',
                'availability' => 'Monday, Wednesday, Friday',
                'date_of_birth' => '25-11-2005',
                'skill_level' => 750,
                'street' => 'Benniestraat',
                'housenumber' => '98',
                'postal_code' => '1209AK',
                'city' => 'Amsterdam',
                'role' => 'coach',
                'password' => bcrypt('Pieter12345'),
            ],
            [
                'firstname' => 'Sara',
                'lastname' => 'Jansen',
                'email' => 'sara@gmail.com',
                'phonenumber' => '0612345678',
                'availability' => 'Monday, Tuesday, Thursday',
                'date_of_birth' => '12-07-1998',
                'skill_level' => 600,
                'street' => 'Dorpsstraat',
                'housenumber' => '12A',
                'postal_code' => '5678CD',
                'city' => 'Amsterdam',
                'role' => 'user',
                'password' => bcrypt('sara12345'),
            ],
            [
                'firstname' => 'Omar',
                'lastname' => 'De Vries',
                'email' => 'omar@gmail.com',
                'phonenumber' => '0623456789',
                'availability' => null,
                'date_of_birth' => '15-05-2000',
                'skill_level' => 800,
                'street' => 'Hoofdstraat',
                'housenumber' => '7B',
                'postal_code' => '9012EF',
                'city' => 'Rotterdam',
                'role' => 'user',
                'password' => bcrypt('omar12345'),
            ],
            [
                'firstname' => 'Fatima',
                'lastname' => 'Van Dijk',
                'email' => 'fatima@gmail.com',
                'phonenumber' => '0634567890',
                'availability' => null,
                'date_of_birth' => '20-02-1995',
                'skill_level' => 550,
                'street' => 'Lindelaan',
                'housenumber' => '25',
                'postal_code' => '3456GH',
                'city' => 'Utrecht',
                'role' => 'user',
                'password' => bcrypt('fatima12345'),
            ],
            [
                'firstname' => 'Yusuf',
                'lastname' => 'Bakker',
                'email' => 'yusuf@gmail.com',
                'phonenumber' => '0656789012',
                'availability' => null,
                'date_of_birth' => '30-09-1992',
                'skill_level' => 475,
                'street' => 'Bergweg',
                'housenumber' => '18C',
                'postal_code' => '7890IJ',
                'city' => 'The Hague',
                'role' => 'user',
                'password' => bcrypt('yusuf12345'),
            ],
            
        ]);
    }
}
