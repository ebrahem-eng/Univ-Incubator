<?php

namespace Database\Seeders;

use App\Models\Ads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ads::create([
            'name' => 'ads1',
            'title' => 'tit1',
            'body' => 'bod1',
            'details' => 'det1',
            'img' => 'img1',
            'created_by' => '1',
        ]);
    }
}
