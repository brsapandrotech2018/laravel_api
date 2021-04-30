<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_masters', function (Blueprint $table) {
            $table->id();

            $table->string('owner_name');
            $table->string('owner_address')->nullable();

            $table->string('owner_email_id')->nullable();
            $table->string('owner_mobile_number')->nullable();

            $table->string('vehicle_number')->nullable();
            $table->string('vehicle_plate_no')->nullable();
            $table->string('vehicle_state')->nullable();
            
            $table->unsignedBigInteger('location_id');
            
            $table->string('chassis_number')->nullable();
            $table->string('vehicle_color')->nullable();
            $table->string('vehicle_make')->nullable();
            $table->string('vehicle_model')->nullable();
            $table->string('vehicle_year')->nullable();
                        
            $table->boolean('is_active')->nullable();

            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

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
        Schema::dropIfExists('vehicle_masters');
    }
}
