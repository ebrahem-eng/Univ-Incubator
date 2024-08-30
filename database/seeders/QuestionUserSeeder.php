<?php

namespace Database\Seeders;

use App\Models\UserQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        UserQuestion::create([
            'question' => 'Question 1',
            'details' => 'Details 1',
            'userID' => '1',
        ]);

        UserQuestion::create([
            'question' => 'Question 2',
            'details' => 'Details 2',
            'answer' => 'Answer 2',
            'answerBy' => '1',
            'userID' => '1',
        ]);
    }
}
