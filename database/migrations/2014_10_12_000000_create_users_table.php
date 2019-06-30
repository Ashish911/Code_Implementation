<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->BigIncrements('id');
            $table->string('FullName');
            $table->string('Address');
            $table->date('DOB');
            $table->string('PhoneNo');
            $table->string('email')->unique();
            $table->string('UserName');
            $table->string('password');
            $table->enum('UserType',['User','Admin'])->default('User');
            $table->string('Profile_Description')->nullable();
            $table->string('Profile_Image')->nullable();
            $table->enum('Status',['Active','Suspended'])->default('Active');
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
        Schema::dropIfExists('users');
    }
}
