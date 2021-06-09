<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


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

Route::get('/', [AuthController::class, "login"]);



Route::resource('title',TitleController::class);
Route::resource('game',GameController::class);
Route::resource('user',UserController::class);

use App\Model\User;
use Illuminate\Support\Facades\Auth;

Route::get("/logoutt",function(Request $request){

    if(auth()->user()->revokeToken()){
        //Hacer el logout
        Auth::logout();
        //Invalidar la sesión
        session()->invalidate();
        //Regenerar el token de la sesión
        session()->regenerateToken();

        return redirect('/login');

    }

})->name("logoutt");