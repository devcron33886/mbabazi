<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Jacques MBABAZI',
                'email' => 'mbabazijacques@gmail.com',
                'password' => bcrypt('Imma@1995$'),
                'email_verified_at' => now(),
            ],

        ];

        User::insert($users);
    }
}
