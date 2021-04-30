<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePickupPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pickup_payments', function (Blueprint $table) {
            $table->id();

            $table->integer('pickup_request_id');
            $table->integer('customer_id');
            
            $table->integer('payment_mode')->nullable();
            $table->integer('payment_type')->nullable();

            $table->float('amount')->nullable();

            $table->float('cgst')->nullable();
            $table->float('sgst')->nullable();

            $table->integer('discount')->nullable();

            $table->float('total')->nullable();

            $table->string('transaction_id')->nullable();
            $table->string('channel_transaction_initiated')->nullable();
            

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
        Schema::dropIfExists('pickup_payments');
    }
}
