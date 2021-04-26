<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAddsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_adds', function (Blueprint $table) {
            $table->increments ('id');
            $table->integer('customer_id');
            $table->integer('address_type_id');

            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('locality')->nullable();
            $table->string('street')->nullable();
            $table->string('building')->nullable();
            $table->string('apartment')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('google_address')->nullable();
            
            $table->integer('added_by')->nullable();
            $table->timestamp('added_on')->nullable();
            $table->integer('modified_by')->nullable();
            $table->timestamp('modified_on')->nullable();
            
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
        Schema::dropIfExists('customer_adds');
    }
}
