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
            ['name' => 'create_items'],
            ['name' => 'manage_items'],
            ['name' => 'create_categories'],
            ['name' => 'manage_tickets'],
            ['name' => 'write_reviews'],
            ['name' => 'remove_users_reviews'],
        ];

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $support = Role::firstOrCreate(['name' => 'support']);
        $user = Role::firstOrCreate(['name' => 'user']);
        
        foreach($permissions as $permission){
            Permission::firstOrCreate(['name' => $permission['name']]);
        }
   
        $admin->givePermissionTo(Permission::all());
        $support->givePermissionTo(['manage_tickets', 'write_reviews', 'manage_items', 'remove_users_reviews']);
        $user->givePermissionTo(['write_reviews',]);
    }
}

