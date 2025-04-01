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
                'street' => 'Kerkstraat',
                'housenumber' => '2',
                'postal_code' => '1203AB',
                'city' => 'Amsterdam',
                'password' => bcrypt('ahmed12345'),
            ],
            [
                'firstname' => 'Ferdy',
                'lastname' => 'van Klink',
                'email' => 'efveka@gmail.com',
                'phonenumber' => '0620416076',
                'street' => 'Tarweland',
                'housenumber' => '15',
                'postal_code' => '1991 PL',
                'city' => 'Haarlem',
                'password' => bcrypt('Ferdy2001'),
            ],
            [
                'firstname' => 'Pieter',
                'lastname' => 'vna Dijk',
                'email' => 'pieter@gmail.com',
                'phonenumber' => '0645678953',
                'street' => 'Benniestraat',
                'housenumber' => '98',
                'postal_code' => '1209AK',
                'city' => 'Amsterdam',
                'password' => bcrypt('Pieter12345'),
            ],
        ]);
    }
}
