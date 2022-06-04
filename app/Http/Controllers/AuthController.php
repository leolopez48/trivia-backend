<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Scoreboard;
use App\Models\User;
use Encrypt;
use Hash;
use Maatwebsite\Excel\Concerns\ToArray;
use \Illuminate\Http\Request; 

class AuthController extends Controller
{
    
    public function register(Request $request)
    {

    try{
        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Scoreboard::create([
            'user_id' => $user->id,
            'score' => 0,
        ]);
        
        $this->login();
        return response()->json([
            'status' => 'success',
            'message' => 'Usuario registrado satisfactoriamente.',
            //'user' => $user,
        ]);  

        }catch (\Throwable $th) {
            return response()->json([
                "status" => "error",
                "message" => "Usuario no pudo ser registrado.",
            ]);
        }
        
    }

    public function updateUser(Request $request){

        $id = $request->id;

        $password = Hash::make($request->password);

        $data = [
            "name" => $request->name,
            "email" => $request->email,
            "password" => $password,
        ];

        User::whereId($id)->update($data);

        return response()->json([
            "status"=>"success",
            "message"=>"Usuario Modificado correctamente.",
            "id"=>$id,
            "data"=>$data,   
        ]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);


        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }


    public function getCategorias()
    {
        $categories = Category::all();
        return response()->json($categories);

    }

    public function getScoreboard()
    {

       $scoreboard = Scoreboard::orderByDesc('score')->get();
       //return response()->json($scoreboard);

       $data=[];
       for($i = 1;$i<=$scoreboard->count();$i++)
        {
           $Username = User::where ('id', '=', Scoreboard::where('id', $i)->value('user_id'))->first();
           $data[] = [
                'id'=> Scoreboard::where('id', $i)->value('user_id'),
                'username' => $Username->name,
                'score'=> Scoreboard::where('id', $i)->value('score'),
            ];
            
        }   
        
        $sortedData = collect($data)->sortBy('score')->reverse()->toArray();

        return response()->json(collect($sortedData)->values()->all());     
    }    


    /**
     * Get the authenticated User .
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        $user = auth('api')->user();
        $highestScore = Scoreboard::where('user_id', $user->id)->value('score');
        $id=$user->id;
        $user = Encrypt::encryptValueObject($user, 'id'); 
        return response()->json([
            'status' => 'success',
            'message' => 'Usuario encontrado satisfactoriamente.',
            'user' => $user,
            'user_id'=>$id,
            'score'=>$highestScore,
        ]);
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth('api')->logout();

        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out'
        ]);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Token generado correctamente.',
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
