<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'name' => 'event1',
            'dayName' => 'day1',
            'eventDate' => '2024-01-18',
            'eventTime' => '01:01',
            'details' => 'No Details',
            'status' => '0',
            'univercityCollegeID' => '1',
            'created_by' => '1',
        ]);
    }
}
