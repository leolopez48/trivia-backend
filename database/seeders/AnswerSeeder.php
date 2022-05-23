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
                'answer_correct' => 'No',
                'question_id' => 2
            ],
            [
                'answer_name' => 'Washington',
                'answer_correct' => 'Yes',
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
            // Question 6
            [
                'answer_name' => '3.141592',
                'answer_correct' => 'Yes',
                'question_id' => 6
            ],
            [
                'answer_name' => '3.151692',
                'answer_correct' => 'No',
                'question_id' => 6
            ],
            [
                'answer_name' => '3.141490',
                'answer_correct' => 'No',
                'question_id' => 6
            ],
            [
                'answer_name' => '3.141892',
                'answer_correct' => 'No',
                'question_id' => 6
            ],
            // Question 7
            [
                'answer_name' => 'Un tipo de triágulo que tiene dos de sus lados iguales',
                'answer_correct' => 'Yes',
                'question_id' => 7
            ],
            [
                'answer_name' => 'Un tipo de triágulo que tiene todos sus lados iguales',
                'answer_correct' => 'No',
                'question_id' => 7
            ],
            [
                'answer_name' => 'Un tipo de triágulo que tiene ninguno de sus lados iguales',
                'answer_correct' => 'No',
                'question_id' => 7
            ],
            [
                'answer_name' => 'Un tipo de triágulo que tiene uno de sus lados iguales',
                'answer_correct' => 'No',
                'question_id' => 7
            ],
            // Question 8
            [
                'answer_name' => '10 Juan , 30 el padre',
                'answer_correct' => 'Yes',
                'question_id' => 8
            ],
            [
                'answer_name' => '13 Juan, 35 el padre',
                'answer_correct' => 'No',
                'question_id' => 8
            ],
            [
                'answer_name' => '15 Juan, 40 el padre',
                'answer_correct' => 'No',
                'question_id' => 8
            ],
            [
                'answer_name' => 'Faltan más datos',
                'answer_correct' => 'No',
                'question_id' => 8
            ],
            // Question 9
            [
                'answer_name' => '160 metros',
                'answer_correct' => 'Yes',
                'question_id' => 9
            ],
            [
                'answer_name' => '80 metros',
                'answer_correct' => 'No',
                'question_id' => 9
            ],
            [
                'answer_name' => 'No se puede calcular',
                'answer_correct' => 'No',
                'question_id' => 9
            ],
            [
                'answer_name' => '120metros',
                'answer_correct' => 'No',
                'question_id' => 9
            ],
            
        ]);
    }
}
