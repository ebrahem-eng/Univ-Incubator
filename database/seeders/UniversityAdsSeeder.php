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
            'name' => 'University Ads',
            'title' => 'Fees And Installments',
            'body' => 'Announcement of payment of the second installment of summer semester fees',
            'details' => 'Any delay will result in a fine and the fine will not be removed under any circumstances.',
            'img' => 'Image/UniversityAdsImage/ads1.JPG',
            'universityID'=>'1',
            'created_by' => '1',
        ]);

        UniversityAds::create([
            'name' => 'University Ads',
            'title' => 'Congratulation',
            'body' => 'Congratulations to the successful students in high school',
            'details' => 'The Syrian Private University congratulates the successful students and wishes them to continue and progress towards the best.',
            'img' => 'Image/UniversityAdsImage/ads2.JPG',
            'universityID'=>'1',
            'created_by' => '1',
        ]);


        UniversityAds::create([
            'name' => 'University Ads',
            'title' => 'Skills And Activities',
            'body' => 'Talent Competitions',
            'details' => 'The Syrian Private University announces accepting applications to discover students’ talents to support and develop them.',
            'img' => 'Image/UniversityAdsImage/ads3.JPG',
            'universityID'=>'1',
            'created_by' => '1',
        ]);
    }
}
