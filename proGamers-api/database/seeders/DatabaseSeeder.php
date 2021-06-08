<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            PrivilegeSeeder::Class,
            Privileges_RolesSeeder::class,
            UserSeeder::class,
            PlatformSeeder::class,
            TitleSeeder::class,
            GameSeeder::class,
            BidSeeder::class,
        ]);
    }
}
