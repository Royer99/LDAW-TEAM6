<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;


class Platform extends Model
{
    public static function getPlatforms(){
        $token = Auth::user()->token;
        $response=Http::withToken($token)->get('http://127.0.0.1:8001/api/platform');
        return $response->json();
    }
}
