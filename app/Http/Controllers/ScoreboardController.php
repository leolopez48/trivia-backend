<?php

namespace App\Http\Controllers;

use App\Models\Scoreboard;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class ScoreboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addScoreboard(Request $request)
    {
        try{
            $user=$request->user_id;
            $score=$request->score;
            $scoreAnterior = Scoreboard::where(['user_id' =>$user])->first();

            if(!$scoreAnterior){
                //primer scroboard del usuario
                $newScoreboard= new Scoreboard();
                    $newScoreboard->user_id=$user;
                    $newScoreboard->score=$score;
                    $newScoreboard->save();
                    return response()->json([
                        "status" => "success",
                        "message" => "New Highscore obtenido! ¡Felicidades!",
                        'game' => $newScoreboard,
                        'scoreAnterior' => $scoreAnterior,
                    ]);     
            } else{
                 //Solo se insertara si el nuevo score es mayour que el anterior
                if($score>$scoreAnterior->score){
                    //borramos el scoreboard anterior del usuario para que solo tenga uno
                    Scoreboard::where('id',$scoreAnterior->id)->delete();
                    $newScoreboard= new Scoreboard();
                    $newScoreboard->user_id=$user;
                    $newScoreboard->score=$score;
                    $newScoreboard->save();
                    return response()->json([
                        "status" => "success",
                        "message" => "New Highscore obtenido! ¡Felicidades!",
                        'game' => $newScoreboard,
                        'scoreAnterior' => $scoreAnterior,
                    ]);     
                }else{
                    //puntuacion menos que la anterior
                    return response()->json([
                        "status" => "success",
                        "message" => "El Highscore anterior no fue superado ! ¡No te rindas!",
                        'scoreObtenido' => $score,
                    ]);    
                }     
            }  
        }
        catch (\Throwable $th) {
            return response()->json([
                "status" => "error",
                "message" => "No se pudo registrar el scoreboard",
            ]);
        }
        
    }

    public function index()
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
     * @param  \App\Models\Scoreboard  $scoreboard
     * @return \Illuminate\Http\Response
     */
    public function show(Scoreboard $scoreboard)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scoreboard  $scoreboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scoreboard $scoreboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scoreboard  $scoreboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scoreboard $scoreboard)
    {
        //
    }
}
