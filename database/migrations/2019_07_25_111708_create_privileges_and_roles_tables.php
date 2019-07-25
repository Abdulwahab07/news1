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
            $table->Increments('id');
            $table->string('role_name')->comment('admin,supervisor,clerk');
            $table->string('role_code');
            $table->unsignedInteger('privilege_id');
            $table->foreign('privilege_id')
                ->references('id')
                ->on('privileges')
                ->onDelete('cascade');
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
