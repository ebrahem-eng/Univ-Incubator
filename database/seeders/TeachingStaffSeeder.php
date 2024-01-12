<?php

namespace Database\Seeders;

use App\Models\TeachingStaff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeachingStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeachingStaff::create([
            'name' => "teachingStaff1",
            'email' => "teachingStaff1@gmail.com",
            'age' => '24',
            'gender' => '1',
            'status' => '1',
            'Designation' => 'profesore',
            'img' => 'img1',
            'univercityCollegeID' => '1',
            'created_by' => '1',
        ]);
    }
}
