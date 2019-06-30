<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTattooreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tattooreviews', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('Review_Comment');
            $table->Biginteger('TattooId')->unsigned();
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
        Schema::dropIfExists('tattooreviews');
    }
}
