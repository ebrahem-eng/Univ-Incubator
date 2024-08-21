<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['guard_name' => 'gadmin', 'name' => 'Super Admin']);
        Role::create(['guard_name' => 'gadmin', 'name' => 'Admin']);
        Role::create(['guard_name' => 'ladmin', 'name' => 'Local Admin']);
        Role::create(['guard_name' => 'ladmin', 'name' => 'Assistant Local Admin']);
        Role::create(['guard_name' => 'userS', 'name' => 'User']);
    }
}
