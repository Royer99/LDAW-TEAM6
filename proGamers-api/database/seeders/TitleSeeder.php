<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            ['title'=>'Minecraft','description'=>'Minecraft es un videojuego de construcción, de tipo «mundo abierto» o sandbox creado originalmente por el sueco Markus Persson (conocido comúnmente como "Notch"),2​ y posteriormente desarrollado por su empresa, Mojang Studios. ','edition'=>'Java','version'=>'1.0.6'],
            ['title'=>'Minecraft','description'=>'Minecraft es un videojuego de construcción, de tipo «mundo abierto» o sandbox creado originalmente por el sueco Markus Persson (conocido comúnmente como "Notch"),2​ y posteriormente desarrollado por su empresa, Mojang Studios. ','edition'=>'Delux','version'=>'2.0.6'],
            ['title'=>'	Halo: Combat Evolved','description'=>'Halo: Combat Evolved, also known as Halo: CE, is a first-person shooter game developed by Bungie and published by Microsoft Game Studios.','edition'=>'Java','version'=>'1.0.6'],
        ]);
    }
}
