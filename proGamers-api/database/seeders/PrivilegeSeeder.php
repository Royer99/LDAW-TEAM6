<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privileges')->insert([
            ['name'=>'index.title','description'=>'Ver los titulos registrados'],
            ['name'=>'create.title','description'=>'Crear un nuevo titulo'],
        ]);
    }
}
