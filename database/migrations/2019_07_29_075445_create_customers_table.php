<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('customer_full_name',150);
            $table->string('customer_address');
            $table->string('contact_number',30);
            $table->string('working_at',100);
            $table->date('date_of_birth')->default('1980-01-01');
            $table->string('customer_gender');
            $table->double('balance')->default(10);
            $table->string('favoraited_contact_method')->default('SMS');
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
        Schema::dropIfExists('customers');
    }
}
