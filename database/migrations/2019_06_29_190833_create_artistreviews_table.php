<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistreviews', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('Review_Comment');
            $table->bigInteger('ArtistId')->unsigned();
            $table->foreign('ArtistId')->references('id')->on('artists')->onDelete('cascade');
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
        Schema::dropIfExists('artistreviews');
    }
}
