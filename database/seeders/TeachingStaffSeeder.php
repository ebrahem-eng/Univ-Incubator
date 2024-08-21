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
            'name' => "TeachingStaff1",
            'email' => "teachingStaff1@gmail.com",
            'age' => '40',
            'gender' => '1',
            'status' => '1',
            'Designation' => 'profesore',
            'img' => 'Image/TeachingStaffImage/staff1.jpg',
            'univercityCollegeID' => '1',
            'created_by' => '1',
        ]);

        TeachingStaff::create([
            'name' => "TeachingStaff2",
            'email' => "teachingStaff2@gmail.com",
            'age' => '50',
            'gender' => '1',
            'status' => '1',
            'Designation' => 'profesore',
            'img' => 'Image/TeachingStaffImage/staff2.jpg',
            'univercityCollegeID' => '1',
            'created_by' => '1',
        ]);

        TeachingStaff::create([
            'name' => "TeachingStaff3",
            'email' => "teachingStaff3@gmail.com",
            'age' => '50',
            'gender' => '1',
            'status' => '1',
            'Designation' => 'Doctor',
            'img' => 'Image/TeachingStaffImage/staff3.jpg',
            'univercityCollegeID' => '1',
            'created_by' => '1',
        ]);
    }
}
