<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Privileges_RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privileges_roles')->insert([
            ['privilege_id'=>'1','role_id'=>'1'],
            ['privilege_id'=>'2','role_id'=>'1'],
            ['privilege_id'=>'1','role_id'=>'2'],
        ]);
    }
}
