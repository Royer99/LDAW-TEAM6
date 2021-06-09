<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Game;

class Title extends Model
{
    //use HasFactory;

    public $timestamps = false;

    public static function getTitles(){
        $titles = self::all();
        return($titles);
    }


    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
