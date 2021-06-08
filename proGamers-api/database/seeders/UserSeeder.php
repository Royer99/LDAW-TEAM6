<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Royer','last_name'=>'Arenas','last_name2'=>'Camacho','phone_number'=>'4611052365','email'=>'A01209400@itesm.mx','password'=>'12345','remember_token'=>'fdasfhdjhflkjahx'],
            ['name'=>'Jorge Arturo','last_name'=>'Sanchez','last_name2'=>'Arreola','phone_number'=>'4611235678','email'=>'A01209404@itesm.mx','password'=>'12345','remember_token'=>'fdasfhdjhflkjahx'],
            ['name'=>'Erik','last_name'=>'Montana','last_name2'=>'Salvador','phone_number'=>'4612098975','email'=>'A01209405@itesm.mx','password'=>'12345','remember_token'=>'fdasfhdjhflkjahx'],
        ]);
    }
}
