<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        $superadmin = Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $user = Role::create(['name' => 'User']);

        $superadmin->givePermissionTo(Permission::all());
        $admin->givePermissionTo([
            'general',
            'dashboard_index',
            'profile_index',
            'menu_emas',
            'data_emas',
            'data_emas_management',
            'level_emas_management',
            'kadar_emas_management',
            'category_emas_management',
        ]);
        $user->givePermissionTo(['general', 'dashboard_index', 'profile_index']);

        User::firstWhere('email', 'superadmin@gmail.com')->assignRole('Super Admin');
        User::firstWhere('email', 'user@gmail.com')->assignRole('User');
        User::firstWhere('email', 'admin@gmail.com')->assignRole('Admin');
    }
}
