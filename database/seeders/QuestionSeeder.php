<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::insert([
            [
                'question_name' => 'What is the capital of India?',
                 'category_id' => 1
            ],
            [
                'question_name' => 'What is the capital of USA?',
                 'category_id' => 1
            ],
            [
                'question_name' => 'What is the capital of Canada?',
                 'category_id' => 1
            ],
            [
                'question_name' => 'What is the capital of Australia?',
                 'category_id' => 1
            ],
            [
                'question_name' => 'What is the capital of Germany?',
                 'category_id' => 1
            ],
        ]);
    }
}
