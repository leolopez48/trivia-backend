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

            //math
            [
                'question_name' => '¿A cuánto equivale π?',
                 'category_id' => 2
            ],
            [
                'question_name' => '¿Qué es un triángulo isósceles?',
                 'category_id' => 2
            ],
            [
                'question_name' => 'Juan tiene 20 años menos que su padre y este tiene el triple de los años de su hijo. ¿Qué edad tienen cada uno?',
                 'category_id' => 2
            ],
            [
                'question_name' => 'El monstruo del lago Ness mide 80 metros más la mitad de lo que mide, ¿cuánto mide el monstruo del lago Ness?',
                 'category_id' => 2
            ],
        ]);
    }
}
