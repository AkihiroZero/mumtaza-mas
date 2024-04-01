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
            'id' => '5157e804-4343-4e69-bbd2-715a1f89d7bd',
            'name' => 'Biasa',
            'price' => '0',
            'description' => 'Emas Biasa',
            'status' => '1'
        ]);

        LevelEmas::create([
            'id' => '7d7cf53c-6da2-4cdb-8257-c138444e1cf7',
            'name' => 'Italy',
            'price' => '30000',
            'description' => 'Emas Model Italy',
            'status' => '1'
        ]);

        LevelEmas::create([
            'id' => 'd0e7500d-39f2-4ae4-ba04-03e756c6794c',
            'name' => 'Premium',
            'price' => '40000',
            'description' => 'Emas Model Premium',
            'status' => '1'
        ]);
    }
}
