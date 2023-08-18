<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'show']);
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);
    }
}
