<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Platform extends Model
{
    public static function getPlatforms(){
        $response=Http::get('http://127.0.0.1:8001/api/platform');
        return $response->json();
    }
}
