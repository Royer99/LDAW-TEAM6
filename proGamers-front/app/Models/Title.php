<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\Model;

class Title
{
    //use HasFactory;

    public static function insertTitle($title){
        //$token = session('token');
        //env('API_URL').
        $response=Http::post('http://127.0.0.1:8001/api/title',['title'=>$title]);
        $wasSuccessful = ($response->status() == 200);
        $message = $response->json()['message'];
        return array($wasSuccessful, $message);

    }

    public static function getTitles(){
        $response=Http::get('http://127.0.0.1:8001/api/title');
        return $response->json();
    }

    public static function getById($id){
        $response=Http::get('http://127.0.0.1:8001/api/title/'.$id,['title'=>$id]);
        return $response->json();
    }

    public static function update($id,$title){
        //$token = session('token');
        //env('API_URL').
        $response=Http::patch('http://127.0.0.1:8001/api/title/'.$id,['title'=>$title]);
        $wasSuccessful = ($response->status() == 200);
        $message = $response->json()['message'];
        return array($wasSuccessful, $message);
    }

}
