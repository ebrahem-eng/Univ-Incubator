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

        //============================= Global Admin Permission =======================

        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Login Page Global Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Store Login Global Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'LogOut Global Admin']);

        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show University Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Create University']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Store University']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Edit University']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Update University']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Soft Delete University']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show University Archive Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Restore University']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Force Delete University']);

        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Local Admin Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Create Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Store Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Edit Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Update Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Soft Delete Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Local Admin Arcvive Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Restore Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Force Delete Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Local Admin Role Permission Page']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Assign Role To Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Delete Role From Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Give Permission To Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Revoke Permission From Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show University Local Admin Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Add University To Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Store University To Local Admin']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Revoke University From Local Admin']);


        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Role Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Permission Role Page']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Assign Role To Permission']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Revoke Role From Permission']);

        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Permission Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Show Permission Role Table']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Give Permission To Role']);
        Permission::create(['guard_name' => 'gadmin', 'name' => 'Revoke Permission From Role']);




        //============================= Local Admin Permission =======================

        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show Login Page Local Admin']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store Login Local Admin']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'LogOut Local Admin']);

        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show College Event Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create College Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store College Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Edit College Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Update College Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Delete College Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Finish College Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Cancel College Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show College Event Image Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create College Event Image']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store College Event Image']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Delete College Event Image']);


        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show Teaching Staff Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create Teaching Staff']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store Teaching Staff']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Edit Teaching Staff']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Update Teaching Staff']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Soft Delete Teaching Staff']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show Teaching Staff Arcvive Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Restore Teaching Staff']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Force Delete Teaching Staff']);


        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show Question User Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create Answer Question User']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store Answer Question User']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show Question User Table History']);


        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show College Ads Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create College Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store College Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Edit College Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Update College Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Soft Delete College Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show College Ads Arcvive Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Restore College Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Force Delete College Ads']);


        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show College Fees Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create College Fees']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store College Fees']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Edit College Fees']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Update College Fees']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Soft Delete College Fees']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show College Fees Arcvive Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Restore College Fees']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Force Delete College Fees']);


        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show College Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Edit College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Update College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Soft Delete College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show College Arcvive Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Restore College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Force Delete College']);


        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show Specialization College Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create Specialization College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store Specialization College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Edit Specialization College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Update Specialization College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Soft Delete Specialization College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show Specialization College Arcvive Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Restore Specialization College']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Force Delete Specialization College']);


        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show University Location Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create University Location']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store University Location']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Edit University Location']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Update University Location']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Delete University Location']);


        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show University Ads Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create University Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store University Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Edit University Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Update University Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Soft Delete University Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show University Ads Arcvive Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Restore University Ads']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Force Delete University Ads']);


        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show University Event Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create University Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store University Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Edit University Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Update University Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Delete University Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Finish University Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Cancel University Event']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Show University Event Image Table']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Create University Event Image']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Store University Event Image']);
        Permission::create(['guard_name' => 'ladmin', 'name' => 'Delete University Event Image']);


        //============================= User Permission =======================

        Permission::create(['guard_name' => 'userS', 'name' => 'Show Login Page UserS']);
        Permission::create(['guard_name' => 'userS', 'name' => 'Store Login UserS']);
        Permission::create(['guard_name' => 'userS', 'name' => 'Show Register Page UserS']);
        Permission::create(['guard_name' => 'userS', 'name' => 'Store Register UserS']);
        Permission::create(['guard_name' => 'userS', 'name' => 'Store Question UserS']);
        Permission::create(['guard_name' => 'userS', 'name' => 'Show Question UserS Table']);
        Permission::create(['guard_name' => 'userS', 'name' => 'LogOut UserS']);

    }
}
