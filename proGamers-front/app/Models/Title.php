<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Title extends Model
{
    //use HasFactory;

    public static function insertTitle($title){
        //$token = session('token');
        //env('API_URL').
        $response=Http::post('http://127.0.0.1:8001/api/title',['title'=>$title]);
        echo($response);
        dd();
        return $response->json();
    }
}
