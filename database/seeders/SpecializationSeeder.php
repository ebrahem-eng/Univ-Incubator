<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Specialization::create([
            'name' => 'spec1',
            'img' => 'img1',
            'created_by' => '1',
        ]);

        Specialization::create([
            'name' => 'spec2',
            'img' => 'img2',
            'created_by' => '1',
        ]);
    }
}
