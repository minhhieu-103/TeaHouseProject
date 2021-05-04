<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->dateTime('order_date');
            $table->dateTime('ship_date');
            $table->dateTime('payment_date');
            $table->integer('order_number');
            $table->integer('customers_id');
            $table->integer('payments_id');
            $table->integer('shippers_id');
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
        Schema::dropIfExists('orders');
    }
}
