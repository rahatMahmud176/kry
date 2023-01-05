<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id');
            $table->string('firstName', 50);
            $table->string('lastName', 50)->nullable();
            $table->string('phoneNumber', 15);
            $table->string('email', 70)->nullable();
            $table->text('address');
            $table->string('zone', 50);
            $table->string('shippingMethod', 50);
            $table->string('productName', 100);
            $table->float('price', 10,2);
            $table->string('productType', 50);
            $table->string('variant', 30);
            $table->string('payMethod', 50)->nullable();
            $table->string('customerAccountNo', 30)->nullable(); 
            $table->string('ourAccountNo', 30)->nullable();
            $table->string('tnxId', 50)->nullable();
            $table->float('payAmount', 10,2)->nullable();
            $table->tinyInteger('status')->default('0');
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
