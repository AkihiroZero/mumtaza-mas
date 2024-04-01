<?php

namespace Database\Seeders;

use App\Models\CategoryEmas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryEmasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryEmas::create([
            'id' => '95aaf812-ae02-45ad-bf1e-91ffae0a5d64',
            'name' => 'Gelang Bangle',
            'image' => 'gelang-bangle.png',
            'description' => 'Menampilkan seluruh emas category gelang bangle',
            'status' => '1'
        ]);
        CategoryEmas::create([
            'id' => '1325b771-a380-495f-9df7-4f0962fd6a28',
            'name' => 'Gelang Rantai',
            'image' => 'gelang-rantai.png',
            'description' => 'Menampilkan seluruh emas category gelang Rantai',
            'status' => '1'
        ]);
        CategoryEmas::create([
            'id' => '35e229d4-7969-4c5e-8d22-5dfeb0276197',
            'name' => 'Cincin',
            'image' => 'cincin.png',
            'description' => 'Menampilkan seluruh emas category cincin',
            'status' => '1'
        ]);
        CategoryEmas::create([
            'id' => 'cbeaf31a-77cb-4818-9b4e-73667d824329',
            'name' => 'Anting',
            'image' => 'anting.png',
            'description' => 'Menampilkan seluruh emas category anting',
            'status' => '1'
        ]);
        CategoryEmas::create([
            'id' => '2ded442b-ec7e-4b40-8d59-4400c260b5d2',
            'name' => 'Liontin',
            'image' => 'liontin.png',
            'description' => 'Menampilkan seluruh emas category liontin',
            'status' => '1'
        ]);
        CategoryEmas::create([
            'id' => '9ab260c2-7ab7-4cec-aa05-718e43f70ae1',
            'name' => 'Kalung',
            'image' => 'kalung.png',
            'description' => 'Menampilkan seluruh emas category kalung',
            'status' => '1'
        ]);
        //Category anak
        CategoryEmas::create([
            'id' => '28c63371-8c9d-4181-93bc-8cb407a1930a',
            'name' => 'Kalung Anak',
            'image' => 'kalung-anak.png',
            'description' => 'Menampilkan seluruh emas category kalung anak',
            'status' => '1'
        ]);
        CategoryEmas::create([
            'id' => 'ff985e5c-1b01-4300-ae3e-19a2e60df6ed',
            'name' => 'Gelang Anak',
            'image' => 'gelang-anak.png',
            'description' => 'Menampilkan seluruh emas category gelang anak',
            'status' => '1'
        ]);
        CategoryEmas::create([
            'id' => 'cd8670a0-eb8a-4001-8ae7-3e020f365897',
            'name' => 'Cincin Anak',
            'image' => 'cincin-anak.png',
            'description' => 'Menampilkan seluruh emas category cincin anak',
            'status' => '1'
        ]);
    }
}
