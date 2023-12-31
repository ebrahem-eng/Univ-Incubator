<?php

namespace Database\Seeders;

use App\Models\UniversityAds;
use App\Models\UniversityCollegeAds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversityAdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        UniversityAds::create([
            'universityID' => '1',
            'adsID' => '1',
        ]);
    }
}
