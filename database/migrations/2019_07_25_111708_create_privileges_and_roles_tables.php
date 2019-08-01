<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegesAndRolesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privileges', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('privilege_name');
            $table->string('privilege_code');
            $table->timestamps();
        });
        Schema::create('roles', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('role_name')->unique()->comment('admin,supervisor,clerk');
            $table->string('role_code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('privileges');
    }
}
