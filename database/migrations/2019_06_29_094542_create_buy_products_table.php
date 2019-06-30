<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('PaymentMethod',['Esewa','Paypal']);
            $table->float('Price');
            $table->float('Total');
            $table->string('Location');
            $table->string('Contact');
            $table->integer('Quantity');
            $table->bigInteger('ProductId')->unsigned();
            $table->foreign('ProductId')->references('id')->on('products')->onDelete('cascade');
            $table->Biginteger('UserId')->unsigned();
            $table->foreign('UserId')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_products');
    }
}
