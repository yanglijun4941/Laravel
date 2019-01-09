<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role_name'=>'管理员'
        ]);
        Role::create([
            'role_name'=>'开发者'
        ]);
        Role::create([
            'role_name'=>'编辑者'
        ]);

    }
}
