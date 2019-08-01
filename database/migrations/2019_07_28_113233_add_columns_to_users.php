<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('id_number',10)->default('1000000000');
            $table->string('mobile_no',10)->default('05XXXXXXXX');
            $table->string('address',100)->nullable();
            $table->unsignedInteger('role_id')->nullable();
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id_number');
            $table->dropColumn('mobile_no');
            $table->dropColumn('address');
        });
    }
}
