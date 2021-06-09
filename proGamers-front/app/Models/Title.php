<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Http;

class Title
{
    //use HasFactory;

    public static function insertTitle($title,$description,$edition,$version,$imageUrl){
        //$token = session('token');
        //env('API_URL').
        echo('front');
        $response=Http::post('http://127.0.0.1:8001/api/title',['title'=>$title,'description'=>$description,'edition'=>$edition,'version'=>$version,'image'=>$imageUrl]);
        dd($response->json());
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
        //dd($response->json());
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
