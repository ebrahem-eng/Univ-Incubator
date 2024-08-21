<?php

namespace Database\Seeders;

use App\Models\LAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        LAdmin::create([
            'name' => 'ladmin',
            'email' => 'ladmin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone'=>'0987654321',
            'status'=>'1',
            'age'=>'23',
            'gender'=>'1',
            'created_by' => '1',
        ])->assignRole('Local Admin' , 'Assistant Local Admin');


        LAdmin::create([
            'name' => 'ladmin2',
            'email' => 'ladmin2@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone'=>'0987654321',
            'status'=>'1',
            'age'=>'23',
            'gender'=>'1',
            'created_by' => '1',
        ])->assignRole('Assistant Local Admin');

    }
}
