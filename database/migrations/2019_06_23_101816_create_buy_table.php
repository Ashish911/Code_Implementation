<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('PaymentMethod',['Esewa','Paypal']);
            $table->float('Price');
            $table->float('Total');
            $table->string('Location');
            $table->string('Contact');
            $table->integer('Quantity');
            $table->bigInteger('TattooId')->unsigned();
            $table->foreign('TattooId')->references('id')->on('tattoos')->onDelete('cascade');
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
        Schema::dropIfExists('buys');
    }
}
