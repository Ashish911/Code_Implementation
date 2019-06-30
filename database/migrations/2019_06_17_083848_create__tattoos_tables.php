<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTattoosTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tattoos', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('Tattoo_Name');
            $table->string('Tattoo_Detail');
            $table->float('Price');
            $table->integer('Quantity');
            $table->string('Tattoo_Image');
            $table->Biginteger('User_Id')->unsigned();
            $table->foreign('User_Id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tattoos');
    }
}
