<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ScoreboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    [
        'middleware' => ['api', 'throttle:api'],
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('login', [AuthController::class, 'login']);
        Route::get('getCategorias', [AuthController::class, 'getCategorias']);
        
    }
);

Route::group(
    [
        'middleware' => ['api', 'auth.api', 'throttle:api', 'log'],
        'prefix' => 'game'
    ],
    function ($router) {
        Route::post('start', [GameController::class, 'startGame']);
        Route::get('getScoreboard', [GameController::class, 'getScoreboard']);
        Route::post('nextQuestion', [QuestionController::class, 'nextQuestionName']);
        Route::get('next', [QuestionController::class, 'nextQuestion']);
        Route::post('respond', [QuestionController::class, 'respond']);
        Route::get('scoreboard', [GameController::class, 'scoreboard']);
        Route::post('addScoreboard', [ScoreboardController::class, 'addScoreboard']);
    }
);


Route::group(
    [
        'middleware' => ['api', 'throttle:api', 'auth:api', 'log'],
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('me', [AuthController::class, 'me']);
    }
);
