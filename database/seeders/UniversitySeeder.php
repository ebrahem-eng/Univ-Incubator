<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        University::create([
            'name' => 'Syrian Private University',
            'phone' => '098723498223',
            'status' => '1',
            'img' => 'img1.png',
            'address_id' => '1',
            'catigory_id' => '1',
            'created_by' => '1',
        ]);
    }
}
