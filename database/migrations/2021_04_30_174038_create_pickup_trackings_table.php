<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupTrackingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickup_trackings', function (Blueprint $table) {
            $table->id();

            $table->integer('pickup_request_id');
            $table->integer('status_id');
            $table->integer('driver_id');
            $table->integer('vehicle_id');
            $table->integer('location_id');

            $table->boolean('is_accepted');
            
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();

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
        Schema::dropIfExists('pickup_trackings');
    }
}
