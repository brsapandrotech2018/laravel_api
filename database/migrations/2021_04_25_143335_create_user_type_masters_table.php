<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypeMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_type_masters', function (Blueprint $table) {
            $table->increments ('id');
            $table->string('user_type')->nullable();
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
        Schema::dropIfExists('user_type_masters');
    }
}
