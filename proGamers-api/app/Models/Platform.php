<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Platform extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function games()
    {
        return $this->hasMany(Game::class);
    }

}
