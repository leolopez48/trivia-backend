<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Game;
use App\Models\Question;
use App\Models\Scoreboard;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function nextQuestion(Request $request)
    {
        try {
            $totalCategories = Category::count();
            $randomIdCategory = Rand(1, $totalCategories);

            $category = Category::where('id', $randomIdCategory)->first();
            $totalQuestions = Question::where('category_id', $randomIdCategory)->count();

            // Get the next question id
            $randomId = 0;
            $randomId = Rand(1, $totalQuestions);

            // Get the next question
            $question = Question::where(['category_id' =>$randomIdCategory, 'id' => $randomId])->first();

            // Get the answers
            $answers = Answer::where('question_id', $question->id)->get()->toArray();
            //Randomize the answers
            shuffle($answers);

            // Getting the current game
            $game = Game::where("user_id", auth('api')->user()->id)->orderBy("created_at", "desc")->first();

            return response()->json([
                "status" => "success",
                "message" => "¡Felicidades! Has pasado al siguiente nivel.",
                'question' => $question,
                'answers' => $answers,
                'category' => $category,
                'game' => $game,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => "error",
                "message" => "La siguiente pregunta no pudo ser obtenida.",
                "trace" => $th
            ]);
        }
    }



    public function nextQuestionName(Request $request)
    {
        try {
            $name_category=$request->category;

            $id_category = Category::where('category_name', $name_category)->value('id');
            //obtiene el array de los id de las preguntas
            $id_questions = Question::where('category_id', $id_category)->pluck('id');

            $id_questions_anterior=$id_questions->toArray();

            //obtiene un valor aleatorio simple del array de arriba
            $randomId = $id_questions[mt_rand(0, count($id_questions) - 1)];

            //$id_questions_anterior = array_diff($id_questions_anterior, array($randomId));
            //$randomId = $id_questions_anterior[mt_rand(0, count($id_questions_anterior) - 1)];

            // Get the next question
            $question = Question::where(['category_id' =>$id_category, 'id' => $randomId])->first();

            // Get the answers
            $answers = Answer::where('question_id', $question->id)->get()->toArray();
            //Randomize the answers
            shuffle($answers);

            // Getting the current game
            $game = Game::where("user_id", auth('api')->user()->id)->orderBy("created_at", "desc")->first();
            $total_question2=Question::where('category_id', $id_category)->count();
            return response()->json([
                "status" => "success",
                "message" => "¡Felicidades! Has pasado al siguiente nivel.",
                "total"=>3,
                'question' => $question,
                'answers' => $answers,
                'category' => $name_category,
                'game' => $game,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => "error",
                "message" => "La siguiente pregunta no pudo ser obtenida.",
                "trace" => $th
            ]);
        }
    }


    //Respond the question
    public function respond(Request $request)
    {
        try {
            $question = Question::where('id', $request->question_id)->first();
            $game = Game::where("user_id", auth('api')->user()->id)->orderBy("created_at", "desc")->first();
            $answers = Answer::where([
                'question_id' => $request->question_id
            ])->get();

            // Update the game
            // $scoreboard = Scoreboard::where(['user_id' => auth('api')->user()->id])->first();

            // Check if the answer is incorrect
            if ($answers[0]->answer_name != $request->answer) {
                $game->lifes_used += 1;

                // Check if the game is finished
                if ($game->lifes_used >= 3) {
                    $game->lifes_used = 3;
                    $game->status = "Finalizado";



                    $game->save();
                    return response()->json([
                    "status" => "success",
                    "message" => "¡Vaya! Has perdido el juego.",
                    'game' => $game,
                ]);
                }

                $game->save();
                return response()->json([
                "status" => "error",
                "message" => "La respuesta es incorrecta.",
                'game' => $game,
            ]);
            }

            // Check if the answer is correct
            $game->answers_corrects += 1;
            //$scoreboard->score += 1;
            //$scoreboard->save();

            // Check if the game is finished
            if ($game->answers_corrects == 15) {
                $game->lifes_used = 3;
                $game->status = "Finalizado";

                $game->save();
                return response()->json([
                "status" => "success",
                "message" => "¡Felicidades! Has completado el juego.",
            ]);
            }

            $game->save();

            return response()->json([
                "status" => "success",
                "message" => "¡Felicidades! La respuesta es correcta.",
                'game' => $game,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => "error",
                "message" => "La respuesta no pudo ser registrada.",
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        return response()->json([
            "status"=>"success",
            "message"=>"Registros obtenidos correctamente.",
            'questions'=>$questions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $category = Category::where('category_name', $data['category_name'])->first();

        $question = Question::create([
            'category_id' => $category->category_name,
            'question_name' => $data['question_name'],
        ]);

        $answers = $data['answers'];
        foreach ($answers as $answer) {
            Answer::create([
                'question_id' => $question->id,
                'answer_name' => $question->answer_name,
                'answer_correct' => $answer->answer_correct,
            ]);
        }

        return response()->json([
            "status"=>"success",
            "message"=>"Registro creado correctamente."
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Question::where('id', $request->id)->update($data);
        return response()->json([
            "status"=>"success",
            "message"=>"Registro modificado correctamente."
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::where('id', $id)->delete();
        return response()->json([
            "status"=>"success",
            "message"=>"Registro eliminado correctamente."
        ]);
    }
}
