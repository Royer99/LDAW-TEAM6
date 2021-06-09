<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\Title;

class Game
{
    use HasFactory;
    
    public static function insertGame($title_id,$user_id,$platform_id,$description){
        $token = Auth::user()->token;
        //env('API_URL').
        $response=Http::withToken($token)->post('http://127.0.0.1:8001/api/game',['title_id'=>$title_id,'user_id'=>$user_id,'platform_id'=>$platform_id,'description'=>$description]);
        $wasSuccessful = ($response->status() == 200);
        $message = $response->json()['message'];
        return array($wasSuccessful, $message);
    }
    
    public static function getGamesTitle($id){
        $token = Auth::user()->token;
        $response=Http::withToken($token)->get('http://127.0.0.1:8001/api/game/'.$id);
        return $response->json();
    }
}
