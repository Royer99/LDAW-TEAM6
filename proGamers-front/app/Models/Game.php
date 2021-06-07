<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Game
{
    use HasFactory;
    
    public static function insertGame($game){
        //$token = session('token');
        //env('API_URL').
        $response=Http::post('http://127.0.0.1:8001/api/game',['game'=>$game]);
        $wasSuccessful = ($response->status() == 200);
        $message = $response->json()['message'];
        return array($wasSuccessful, $message);

    }
}
