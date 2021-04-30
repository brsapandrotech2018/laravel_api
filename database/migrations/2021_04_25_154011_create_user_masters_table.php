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

            $table->string('user_id')->nullable();
            $table->integer('user_type_id')->nullable();
            $table->string('user_salt')->nullable();
            $table->string('user_display_name')->nullable();

            $table->string('user_name')->nullable();

            $table->string('contact_number')->nullable();
            $table->string('email_id')->nullable();
            $table->string('last_logon')->nullable();
            
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
        Schema::dropIfExists('user_masters');
    }
}
