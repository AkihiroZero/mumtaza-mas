<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MenuGroup;
use App\Models\MenuItem;

class MenuEmasSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $general = MenuGroup::create([
            'name' => 'Menu Emas',
            'permission_name' => 'menu emas',
            'posision' => 3,
        ]);

        MenuItem::create([
            'name' => 'Level Emas',
            'icon' => 'ri-vip-diamond-fill',
            'route' => 'level.index',
            'permission_name' => 'level_emas_management',
            'menu_group_id' => $general->id,
            'posision' => 1,
        ]);

        MenuItem::create([
            'name' => 'Kadar Emas',
            'icon' => 'ri-copper-diamond-fill',
            'route' => 'kadar.index',
            'permission_name' => 'kadar_emas_management',
            'menu_group_id' => $general->id,
            'posision' => 2,
        ]);

        MenuItem::create([
            'name' => 'Category Emas',
            'icon' => 'ri-copyright-fill',
            'route' => 'category.index',
            'permission_name' => 'category_emas_management',
            'menu_group_id' => $general->id,
            'posision' => 3,
        ]);

        MenuItem::create([
            'name' => 'Data Emas',
            'icon' => 'ri-copper-coin-fill',
            'route' => 'emas.index',
            'permission_name' => 'data_emas_management',
            'menu_group_id' => $general->id,
            'posision' => 4,
        ]);
    }
}
