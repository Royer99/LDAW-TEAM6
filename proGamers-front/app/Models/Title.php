<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //use HasFactory;

    public static function insertTitle($title){
        //$token = session('token');
        $response=Http::post(env('API_URL').'title',['title'=>$title]);
        return $response->json();
    }
}
