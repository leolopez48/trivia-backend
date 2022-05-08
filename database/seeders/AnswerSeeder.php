<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::insert([
            // Question 1
            [
                'answer_name' => 'Nueva Delhi',
                'answer_correct' => 'Yes',
                'question_id' => 1
            ],
            [
                'answer_name' => 'Washington D.C.',
                'answer_correct' => 'No',
                'question_id' => 1
            ],
            [
                'answer_name' => 'Ottawa',
                'answer_correct' => 'No',
                'question_id' => 1
            ],
            [
                'answer_name' => 'London',
                'answer_correct' => 'No',
                'question_id' => 1
            ],
            // Question 2
            [
                'answer_name' => 'New York',
                'answer_correct' => 'Yes',
                'question_id' => 2
            ],
            [
                'answer_name' => 'Washington',
                'answer_correct' => 'No',
                'question_id' => 2
            ],
            [
                'answer_name' => 'London',
                'answer_correct' => 'No',
                'question_id' => 2
            ],
            [
                'answer_name' => 'Paris',
                'answer_correct' => 'No',
                'question_id' => 2
            ],
            // Question 3
            [
                'answer_name' => 'Ottawa',
                'answer_correct' => 'Yes',
                'question_id' => 3
            ],
            [
                'answer_name' => 'Washington',
                'answer_correct' => 'No',
                'question_id' => 3
            ],
            [
                'answer_name' => 'London',
                'answer_correct' => 'No',
                'question_id' => 3
            ],
            [
                'answer_name' => 'Paris',
                'answer_correct' => 'No',
                'question_id' => 3
            ],
            // Question 4
            [
                'answer_name' => 'Sydney',
                'answer_correct' => 'Yes',
                'question_id' => 4
            ],
            [
                'answer_name' => 'Melbourne',
                'answer_correct' => 'No',
                'question_id' => 4
            ],
            [
                'answer_name' => 'Brisbane',
                'answer_correct' => 'No',
                'question_id' => 4
            ],
            [
                'answer_name' => 'Perth',
                'answer_correct' => 'No',
                'question_id' => 4
            ],
            // Question 5
            [
                'answer_name' => 'Berlín',
                'answer_correct' => 'Yes',
                'question_id' => 5
            ],
            [
                'answer_name' => 'Madrid',
                'answer_correct' => 'No',
                'question_id' => 5
            ],
            [
                'answer_name' => 'Londres',
                'answer_correct' => 'No',
                'question_id' => 5
            ],
            [
                'answer_name' => 'Paris',
                'answer_correct' => 'No',
                'question_id' => 5
            ],
        ]);
    }
}
