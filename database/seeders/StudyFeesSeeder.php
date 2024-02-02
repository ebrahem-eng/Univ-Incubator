<?php

namespace Database\Seeders;

use App\Models\studyFees;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyFeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        studyFees::create([
            'annualFees' => 'no ',
            'annualFeesNumber' => '200',
            'details' => 'No Details' ,
            'annualFeesDate' => '2024-01-18',
            'univercityCollegeID' => '1',
        ]);
    }
}
