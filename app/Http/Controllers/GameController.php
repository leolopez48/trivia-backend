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
        $lastGame = Game::where("user_id", auth('api')->user()->id)->orderBy("created_at", "desc")->first();

        /**
         * Verificando si el usuario ya tiene una partida iniciada
         */
        if (empty($lastGame) || $lastGame->status == "Finalizado") {
            $game = Game::create([
                "user_id" => auth('api')->user()->id,
                "total_lifes" => 3,
                "lifes_used" => 0,
                "total_answers" => 15,
                "status" => "Iniciado",
                "answers_corrects" => 0,
            ]);

            return response()->json([
                "status" => "success",
                "message" => "Juego iniciado correctamente.",
                "game" => $game,
            ]);
        }

        return response()->json([
            "status" => "success",
            "message" => "Se encontró un juego sin finalizar.",
            "game" => $lastGame,
        ]);
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
