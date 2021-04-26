<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_masters', function (Blueprint $table) {
            $table->increments ('id');

            $table->integer('user_type_id')->nullable();

            $table->string('user_display_name')->nullable();

            $table->string('user_name')->nullable();

            $table->string('contact_number')->nullable();
            $table->string('email_id')->nullable();
            $table->string('last_logon')->nullable();
            
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
        Schema::dropIfExists('user_masters');
    }
}
