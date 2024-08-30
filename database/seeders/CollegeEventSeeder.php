<?php

namespace Database\Seeders;

use App\Models\CollegeEvent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegeEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        CollegeEvent::create([
            'name' => 'Event1',
            'dayName' => 'Sunday',
            'eventDate' => '1-1-2024',
            'eventTime' => '01:00',
            'details' => 'Join us for the Annual Science Symposium where leading experts from various scientific fields will present their latest research findings. The symposium will include keynote speeches, panel discussions, and networking opportunities.',
            'status' => '1',
            'created_by' => '1',
            'univCollegeID' => '1'
        ]);

        CollegeEvent::create([
            'name' => 'Event2',
            'dayName' => 'Monday',
            'eventDate' => '1-6-2024',
            'eventTime' => '03:00',
            'details' => 'A one-day summit bringing together the brightest minds in technology to discuss emerging trends, share insights, and explore the future of innovation.',
            'status' => '0',
            'created_by' => '1',
            'univCollegeID' => '1'
        ]);
    }
}
