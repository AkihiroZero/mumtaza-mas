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
            'id' => '41904d43-d1ed-4152-87f2-2bc87e501007',
            'name' => '6K',
            'price' => '450000',
            'description' => 'Emas 6k',
            'status' => '1'
        ]);

        KadarEmas::create([
            'id' => 'b2889166-a045-4fe0-bd68-411e9a48fce9',
            'name' => '8K',
            'price' => '500000',
            'description' => 'Emas 8k',
            'status' => '1'
        ]);

        KadarEmas::create([
            'id' => 'aa2d5dfb-6e7d-4b28-b75b-03d2f9966de7',
            'name' => '9K',
            'price' => '750000',
            'description' => 'Emas 9k',
            'status' => '1'
        ]);

        KadarEmas::create([
            'id' => '367afc54-5fb0-470a-8f8a-5a9ad9304cca',
            'name' => '10K',
            'price' => '750000',
            'description' => 'Emas 10k',
            'status' => '1'
        ]);

        KadarEmas::create([
            'id' => '3bf400ea-89ae-4903-813d-7bbd034da7e0',
            'name' => '15K',
            'price' => '819000',
            'description' => 'Emas 15k',
            'status' => '1'
        ]);

        KadarEmas::create([
            'id' => '51dcec8d-e469-4b76-b8f6-fa557e09ddbb',
            'name' => '16K',
            'price' => '819000',
            'description' => 'Emas 16k',
            'status' => '1'
        ]);

        KadarEmas::create([
            'id' => '5a04e277-529f-4b32-81bf-c8b0828c504a',
            'name' => '17K',
            'price' => '819000',
            'description' => 'Emas 17k',
            'status' => '1'
        ]);

        KadarEmas::create([
            'id' => '2b4b018e-0c06-4ce9-acd3-cd7b637e1597',
            'name' => '18K',
            'price' => '819000',
            'description' => 'Emas 18k',
            'status' => '1'
        ]);

        KadarEmas::create([
            'id' => 'c3h7f75d-3422-4c33-9e33-6a2ad1a02618',
            'name' => '22K',
            'price' => '819000',
            'description' => 'Emas 22k',
            'status' => '1'
        ]);

        KadarEmas::create([
            'id' => 'e9b9f75c-3911-4c33-9e33-6c2ac1a89572',
            'name' => '24K',
            'price' => '819000',
            'description' => 'Emas 24k',
            'status' => '1'
        ]);
    }
}
