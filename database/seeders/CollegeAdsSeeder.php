<?php

namespace Database\Seeders;

use App\Models\CollegeAds;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegeAdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        CollegeAds::create([
            'name' => 'College Ads',
            'title' => 'Due To Absence',
            'body' => 'Absence Justification Committee Meeting For Summer Semester',
            'details' => 'Failure To Attend Means Being Denied The Exam.',
            'img' => 'Image/CollegeAdsImage/ads4.JPG',
            'univCollegeID'=>'1',
            'created_by' => '1',
        ]);

        CollegeAds::create([
            'name' => 'College Ads',
            'title' => 'For Exam',
            'body' => 'Final Exam Schedule For Summer Semester',
            'details' => 'The Exam Will Not Be Repeated Under Any Reason',
            'img' => 'Image/CollegeAdsImage/ads5.JPG',
            'univCollegeID'=>'1',
            'created_by' => '1',
        ]);

        CollegeAds::create([
            'name' => 'College Ads',
            'title' => 'Due To Absence',
            'body' => 'Student With Unjustified Absences In The Summer Semester.',
            'details' => 'Please Dont Contact Any Party As The Decision Is Final',
            'img' => 'Image/CollegeAdsImage/ads6.JPG',
            'univCollegeID'=>'1',
            'created_by' => '1',
        ]);
    }
}
