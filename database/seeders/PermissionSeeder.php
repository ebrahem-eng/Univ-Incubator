<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Local Admin Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Edit Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Local Admin Role Permission Page']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Assign Role To Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Delete Role From Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Give Permission To Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Revoke Permission From Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Move Local Admin To Archive']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Add Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Local Admin Arcvive Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Restore Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Delete Local Admin']);

    }
}
