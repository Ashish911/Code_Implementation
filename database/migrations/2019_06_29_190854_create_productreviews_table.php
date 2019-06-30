<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductreviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productreviews', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('Review_Comment');
            $table->Biginteger('ProductId')->unsigned();
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
        Schema::dropIfExists('productreviews');
    }
}
