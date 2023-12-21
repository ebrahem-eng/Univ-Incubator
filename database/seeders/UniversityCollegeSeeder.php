<?php

namespace Database\Seeders;

use App\Models\UniversityCollege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversityCollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        UniversityCollege::create([
            'universityId' => '1',
            'collegeId' => '1',
        ]);

        UniversityCollege::create([
            'universityId' => '1',
            'collegeId' => '2',
        ]);
    }
}
