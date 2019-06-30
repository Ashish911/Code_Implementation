<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtistReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Day');
            $table->enum('Availability',['Yes','No'])->default('Yes');
            $table->bigInteger('ArtistId')->unsigned();
            $table->foreign('ArtistId')->references('id')->on('artists')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_reservations');
    }
}
