<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePrivileges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_privileges', function (Blueprint $table) {
            $table->unsignedInteger('privilege_id');
            $table->unsignedInteger('role_id');

            $table->foreign('privilege_id')
                ->references('id')
                ->on('privileges');

            $table->foreign('role_id')
                ->references('id')
                ->on('roles');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_privileges');
    }
}
