<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolePermissionTable extends Migration
{
    /**
     * 角色与权限对应表
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_premission', function (Blueprint $table) {
            $table->unsignedInteger('rid');
            $table->unsignedInteger('pid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_premission');
    }
}
