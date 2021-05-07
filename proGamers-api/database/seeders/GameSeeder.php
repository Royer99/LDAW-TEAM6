<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            ['title_id'=>'1','user_id'=>'1','platform_id'=>'1','description'=>'Presenta unos pequnos rayones, pero jala al 100'],
            ['title_id'=>'2','user_id'=>'2','platform_id'=>'2','description'=>'Presenta unos pequnos rayones, pero jala al 100'],
            ['title_id'=>'1','user_id'=>'3','platform_id'=>'3','description'=>'Presenta unos pequnos rayones, pero jala al 100'],
        ]);
    }
}
