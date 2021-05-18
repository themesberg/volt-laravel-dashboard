<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id')->unique();
            $table->string('First_Name')->nullable();
            $table->string('Last_Name')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Email')->unique();
            $table->string('password');
            $table->date('Birthday')->nullable();
            $table->string('Address')->nullable();
            $table->string('Number')->nullable();
            $table->string('City')->nullable();
            $table->string('ZIP')->nullable();
            $table->string('Phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->unique();
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
