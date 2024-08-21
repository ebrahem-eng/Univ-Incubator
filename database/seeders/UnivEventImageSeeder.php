<?php

namespace Database\Seeders;

use App\Models\UnivEventImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnivEventImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UnivEventImage::create([
            'img' => 'Image/UniversityEventImage/event1.jpg',
            'UnivEventID' => '1',
        ]);

        UnivEventImage::create([
            'img' => 'Image/UniversityEventImage/event2.jpg',
            'UnivEventID' => '2',
        ]);

        UnivEventImage::create([
            'img' => 'Image/UniversityEventImage/event3.jpg',
            'UnivEventID' => '3',
        ]);
    }
}
