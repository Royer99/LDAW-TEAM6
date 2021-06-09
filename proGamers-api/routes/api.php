<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource("title",TitleController::class);

Route::apiResource("user",UserController::class);

//Login de sanctum para devolver token
Route::post("/login",[AuthController::class,"login"]);


//Devuelve el usuario
Route::middleware('auth:sanctum')->get('/user',[AuthController::class,"getUser"]);

//NOTE: logout de sanctum
Route::middleware('auth:sanctum')->get("/logout",[AuthController::class,"logout"]);

Route::middleware('auth:sanctum')->apiResource("game",GameController::class);

Route::middleware('auth:sanctum')->get("platform",[PlatformController::class,'index']);


