<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert([
            ['description'=>'Xbox one'],
            ['description'=>'PC'],
            ['description'=>'Nintendo Switch'],
            ['description'=>'PS5']
        ]);
    }
}
