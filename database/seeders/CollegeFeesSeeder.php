<?php

namespace Database\Seeders;

use App\Models\CollegeFees;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegeFeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CollegeFees::create([
            'annualFees' => 'Two hundred fifty thousand.',
            'annualFeesNumber' => '250000',
            'details' => 'per hour' ,
            'annualFeesDate' => '2024-01-1',
            'univCollegeID' => '1',
            'created_by' => '1',
        ]);

        CollegeFees::create([
            'annualFees' => 'Three hundred thousand.',
            'annualFeesNumber' => '300000',
            'details' => 'per hour' ,
            'annualFeesDate' => '2024-01-1',
            'univCollegeID' => '2',
            'created_by' => '1',
        ]);

        CollegeFees::create([
            'annualFees' => 'Four hundred thousand.',
            'annualFeesNumber' => '400000',
            'details' => 'per hour' ,
            'annualFeesDate' => '2024-01-1',
            'univCollegeID' => '3',
            'created_by' => '1',
        ]);

        CollegeFees::create([
            'annualFees' => 'Five hundred thousand.',
            'annualFeesNumber' => '500000',
            'details' => 'per hour' ,
            'annualFeesDate' => '2024-01-1',
            'univCollegeID' => '4',
            'created_by' => '1',
        ]);

        CollegeFees::create([
            'annualFees' => 'Four hundred fifty thousand.',
            'annualFeesNumber' => '450000',
            'details' => 'per hour' ,
            'annualFeesDate' => '2024-01-1',
            'univCollegeID' => '5',
            'created_by' => '1',
        ]);

        CollegeFees::create([
            'annualFees' => 'Three hundred fifty thousand.',
            'annualFeesNumber' => '350000',
            'details' => 'per hour' ,
            'annualFeesDate' => '2024-01-1',
            'univCollegeID' => '6',
            'created_by' => '1',
        ]);
    }
}
