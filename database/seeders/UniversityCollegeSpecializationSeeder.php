<?php

namespace Database\Seeders;

use App\Models\univercityCollegeSpecialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversityCollegeSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        univercityCollegeSpecialization::create([
        'specializationID' => '1',
        'univercityCollegeID' => '1',
        ]);
    }
}
