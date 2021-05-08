<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Title extends Model
{
    //use HasFactory;

    
    public static function insertTitle($title){
        try{
            $status=DB::table('titles')->insert(['title'=>$title["title"], 
                                            'description'=>$title["description"],
                                            'edition'=>$title["edition"],
                                            'version'=>$title["version"],
            ]);
            
            }catch(\Illuminate\Database\QueryException $ex){ 
                return($ex->getMessage()); 
            }
    }

}
