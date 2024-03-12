<?php

namespace Database\Seeders;

use App\Models\KadarEmas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KadarEmasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KadarEmas::create([
            'name' => '8k',
            'price' => '415000',
            'description' => 'Emas Biasa',
            'status' => '1'
        ]);

        KadarEmas::create([
            'name' => '9k',
            'price' => '750000',
            'description' => 'Emas Model Italy',
            'status' => '1'
        ]);

        KadarEmas::create([
            'name' => '16k',
            'price' => '819000',
            'description' => 'Emas Model Premium',
            'status' => '1'
        ]);
    }
}
