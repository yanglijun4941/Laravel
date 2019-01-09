<?php

use Illuminate\Database\Seeder;
use     App\Models\User;
class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'admin',
            'password'=>bcrypt('admin'),
            'email'=>'admin@admin.com'
        ]);
        factory(App\Models\User::class,10)->create();
    }
}
