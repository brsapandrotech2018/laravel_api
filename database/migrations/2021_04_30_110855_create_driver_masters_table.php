<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_masters', function (Blueprint $table) {
            $table->id();

            $table->string('driver_name');
            
            $table->string('driver_email_id')->nullable();

            $table->string('driver_mobile_number1')->nullable();
            $table->string('driver_mobile_number2')->nullable();
            
            $table->string('driver_address')->nullable();

            $table->string('driver_pan_number')->nullable();
            $table->string('driver_aadhar_number')->nullable();
            $table->string('vehicle_state')->nullable();
            
            $table->unsignedBigInteger('location_id');
            $table->boolean('is_active')->nullable();

            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();

            $table->timestamps();
            $table->foreign('location_id')->references('id')->on('location_masters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_masters');
    }
}
