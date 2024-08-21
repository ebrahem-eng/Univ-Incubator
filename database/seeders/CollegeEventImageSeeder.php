<?php

namespace Database\Seeders;

use App\Models\CollegeEventImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegeEventImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        CollegeEventImage::create([
            'img' => 'Image/EventImage/event4.jpg',
            'collegeEventID' => '1'
        ]);

        CollegeEventImage::create([
            'img' => 'Image/EventImage/event5.jpg',
            'collegeEventID' => '2'
        ]);
    }
}
