<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Scoreboard;
use App\Models\User;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function startGame()
    {
        // $lastGame = Game::where("user_id", auth('api')->user()->id)->orderBy("created_at", "desc")->first();

        /**
         * Verificando si el usuario ya tiene una partida iniciada
         */
        // if (empty($lastGame) || $lastGame->status == "Finalizado") {
        $game = Game::create([
                "user_id" => auth('api')->user()->id,
                "total_lifes" => 3,
                "lifes_used" => 0,
                "total_answers" => 3,
                "status" => "Iniciado",
                "answers_corrects" => 0,
            ]);

        return response()->json([
                "status" => "success",
                "message" => "Juego iniciado correctamente.",
                "game" => $game,
            ]);
        // }

        // return response()->json([
        //     "status" => "success",
        //     "message" => "Se encontró un juego sin finalizar.",
        //     "game" => $lastGame,
        // ]);
    }

    public function getScoreboard()
    {
        $scoreboard = Scoreboard::all();
        $data=[];
        for ($i = 0;$i<$scoreboard->count();$i++) {
            //obtener la lista de los id de usuarios que tienen un scoreboard
            $idUser= Scoreboard::all()->pluck('user_id');
            //obtener la informacion de cada uno de los usuarios e imprimir su nombre.
            $Username = User::where('id', '=', Scoreboard::where('user_id', $idUser[$i])->value('user_id'))->first();
            $data[] = [
                'id'=> Scoreboard::where('user_id', $idUser[$i])->value('user_id'),
                'username'=>$Username = $Username->name,
                'score'=> Scoreboard::where('user_id', $idUser[$i])->value('score'),
            ];
        }
        //ordenar de manera desendiente dependiendo de la columna de score
        $sortedData = collect($data)->sortBy('score')->reverse()->toArray();

        return response()->json(collect($sortedData)->values()->all());
    }

    /**
     * Get the scoreboard of the game based on the number of users and the number of games played.
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     **/
    public function scoreboard()
    {
        $users = Scoreboard::orderBy("score", "desc")->take(10)->get();

        return response()->json([
            "status" => "success",
            "message" => "Lista de jugadores y juegos.",
            "users" => $users,
        ]);
    }
}
