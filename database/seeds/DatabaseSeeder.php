<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeederTable::class);
        $this->call(RoleSeederTable::class);
        $this->call(PremissionSeederTable::class);
    }
}
