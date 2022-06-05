<?php

namespace App\Http\Controllers;

use App\Models\GameDetails;
use Illuminate\Http\Request;

class GameDetailsController extends Controller
{
    public static function log(Request $request)
    {
        try {
            $gameDetails = GameDetails::create([
                'game_id' => $request->game_id,
                'question_id' => $request->question_id,
                'answer' => $request->answer,
                'correct' => $request->correct,
                'time' => $request->time,
            ]);

            return response()->json([
                "status" => "success",
                "message" => "Pregunta registrada correctamente.",
                'gameDetails' => $gameDetails,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "status" => "error",
                "message" => "La pregunta no pudo ser registrada.",
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GameDetails  $gameDetails
     * @return \Illuminate\Http\Response
     */
    public function show(GameDetails $gameDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GameDetails  $gameDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(GameDetails $gameDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GameDetails  $gameDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GameDetails $gameDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GameDetails  $gameDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(GameDetails $gameDetails)
    {
        //
    }
}
