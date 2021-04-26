<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments ('id');
            $table->integer('customer_id')->nullable();

            $table->string('mobile_number');
            $table->string('dob')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->integer('user_type_id')->nullable();
            
            $table->string('email_id')->nullable();
            $table->string('pan_card')->nullable();
            $table->string('aadhar_number')->nullable();

            
            $table->timestamp('registered_datetime')->nullable();            
            $table->timestamp('update_datetime')->nullable();
            
            $table->boolean('is_active')->nullable();
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
