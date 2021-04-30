<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_masters', function (Blueprint $table) {
            // $table->integer ('id');
            $table->id();

            $table->string('location_name');
            $table->string('location_details')->nullable();

            $table->integer('state_id')->nullable();
            $table->integer('country_id')->nullable();
            
            $table->boolean('is_active')->nullable();

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
        Schema::dropIfExists('location_masters');
    }
}
