<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bids')->insert([
            ['date'=>'2021-05-07','owner_game'=>'1','bidder_game'=>'2','bidder'=>'2','status'=>'p'],
            ['date'=>'2021-05-06','owner_game'=>'3','bidder_game'=>'1','bidder'=>'1','status'=>'t']
        ]);
    }
}
