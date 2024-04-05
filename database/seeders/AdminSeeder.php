<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$12$iaf.QOyFR.4OI2n9bDiQUu/9SFXwmpTlwmRaft4DpxqN0cPUCcJZm',
        ])->assignRole('owner', 'admin');
    }
}
