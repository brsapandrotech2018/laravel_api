<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('type');
            $table->string('description')->nullable();
            $table->string('image_path')->nullable();
            $table->string('image_url')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
