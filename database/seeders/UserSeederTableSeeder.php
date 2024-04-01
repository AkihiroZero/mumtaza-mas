<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => 'superadmin123'
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => 'testuser'
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'administrator'
        ]);

        User::factory()->create([
            'name' => 'Admin_05',
            'email' => 'admin05@gmail.com',
            'password' => 'administrator'
        ]);

        User::factory()->create([
            'name' => 'Admin_10',
            'email' => 'admin10@gmail.com',
            'password' => 'administrator'
        ]);

        User::factory()->create([
            'name' => 'Admin_15',
            'email' => 'admin15@gmail.com',
            'password' => 'administrator'
        ]);

        User::factory()->create([
            'name' => 'Admin_20',
            'email' => 'admin20@gmail.com',
            'password' => 'administrator'
        ]);

        User::factory()->create([
            'name' => 'Admin_25',
            'email' => 'admin25@gmail.com',
            'password' => 'administrator'
        ]);
    }
}
