<?php

namespace Database\Seeders;

use App\Models\College;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        College::create([
            'name' => 'Computer Sinece',
            'img' => 'img1',
            'created_by' => '1'
        ]);

        College::create([
            'name' => 'Pharmacy',
            'img' => 'img2',
            'created_by' => '1'
        ]);
    }
}
