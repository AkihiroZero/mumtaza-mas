<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LevelEmas;

class LevelEmasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LevelEmas::create([
            'name' => 'Biasa',
            'price' => '0',
            'description' => 'Emas Biasa',
            'status' => '1'
        ]);

        LevelEmas::create([
            'name' => 'Italy',
            'price' => '30000',
            'description' => 'Emas Model Italy',
            'status' => '1'
        ]);

        LevelEmas::create([
            'name' => 'Premium',
            'price' => '40000',
            'description' => 'Emas Model Premium',
            'status' => '1'
        ]);
    }
}
