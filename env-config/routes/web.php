<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get("/", [MateController::class, "listMate"]);
Route::get("/teammates/{id}", [MateController::class, "specificMate"]); 

/*Route::get('/', function () {
    return view('welcome');
});*/
