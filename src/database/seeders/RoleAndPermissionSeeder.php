<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'admin']);

        $guest = Role::create(['name' => 'guest']);

        $dashboard = Permission::create(['name' => 'dashboard']);

        $productList = Permission::create(['name' => 'productList']);
        $productCreate = Permission::create(['name' => 'productCreate']);

        $admin->givePermissionTo([
            $dashboard,
            $productList,
            $productCreate,
        ]);

        $guest->givePermissionTo([
            $dashboard,
            $productList,
        ]);
    }
}
