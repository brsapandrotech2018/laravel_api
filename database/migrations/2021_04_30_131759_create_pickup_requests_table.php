<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickup_requests', function (Blueprint $table) {
            $table->id();

            $table->integer('customer_id');
            
            $table->string('pickup_address')->nullable();
            
            $table->unsignedBigInteger('location_id');

            $table->integer('pickup_status')->nullable();
            $table->string('pickup_request_attendedBy')->nullable();
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
        Schema::dropIfExists('pickup_requests');
    }
}
