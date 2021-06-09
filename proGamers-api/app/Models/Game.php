<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Title;
use App\Models\Platform;
use App\Models\User;


class Game extends Model
{
    //use HasFactory;
    public $timestamps = false;

    public function title()
    {
        return $this->belongsTo(Title::class);
    }

    public function platform()
    {
        return $this->belongsTo(Platform::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
