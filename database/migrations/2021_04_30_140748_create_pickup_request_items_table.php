<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupRequestItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickup_request_items', function (Blueprint $table) {
            
            $table->id();

            $table->integer('pickup_request_id');
            $table->integer('item_id');
            
            $table->float('quantity')->nullable();
            $table->float('price')->nullable();
            $table->float('total_price')->nullable();
            
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
        Schema::dropIfExists('pickup_request_items');
    }
}
