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
            ['name'=>'show.title','description'=>'Ver un titulo en especifico'],
            ['name'=>'update.title','description'=>'Actualizar un titulo en especifico'],
            ['name'=>'create.game','description'=>'Crear un nuevo juego fisico'],
            ['name'=>'index.game','description'=>'Ver los juegos fisicos disponibles para ofertar'],
            ['name'=>'bid.game','description'=>'Crear un nuevo titulo'],
        ]);
    }
}
