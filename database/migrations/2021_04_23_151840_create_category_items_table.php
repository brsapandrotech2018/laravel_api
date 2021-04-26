<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_items', function (Blueprint $table) {
            $table->increments ('id');
            $table->integer('category_id');
            $table->integer('unit_id');
            $table->string('item_name');
            $table->float('unit_price')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('category_items');
    }
}
