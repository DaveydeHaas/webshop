<?php

namespace Database\Seeders;

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
        $permissions = [
            ['name' => 'create_items', 'guard_name' => 'api'],
            ['name' => 'manage_items', 'guard_name' => 'api'],
            ['name' => 'create_categories', 'guard_name' => 'api'],
            ['name' => 'manage_tickets', 'guard_name' => 'api'],
            ['name' => 'write_reviews', 'guard_name' => 'api'],
            ['name' => 'remove_users_reviews', 'guard_name' => 'api'],
        ];

        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'api']);
        $support = Role::firstOrCreate(['name' => 'support', 'guard_name' => 'api']);
        $user = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'api']);
        
        foreach($permissions as $permission){
            Permission::firstOrCreate(['name' => $permission['name']]);
        }
   
        $admin->givePermissionTo(Permission::all());
        $support->givePermissionTo(['manage_tickets', 'write_reviews', 'manage_items', 'remove_users_reviews']);
        $user->givePermissionTo(['write_reviews',]);
    }
}

