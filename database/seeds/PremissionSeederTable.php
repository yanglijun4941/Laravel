<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;
class PremissionSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Permission::create([
         'name'=>'用户管理',
         'routename'=>'',
         'is_menu'=>'1'
       ]);
       Permission::create([
        'name'=>'用户列表',
        'routename'=>'',
        'is_menu'=>'1'
      ]);
      Permission::create([
        'name'=>'用户添加',
        'routename'=>'',
        'is_menu'=>'1'
      ]);
    }
}
