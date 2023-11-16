<?php

namespace Database\Seeders;

use App\Models\Catigory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatigorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Catigory::create([
            'name' => 'cat1',
            'type' => '1',
        ]);

        Catigory::create([
            'name' => 'cat2',
            'type' => '2',
        ]);

        Catigory::create([
            'name' => 'cat3',
            'type' => '0',
        ]);
    }
}
