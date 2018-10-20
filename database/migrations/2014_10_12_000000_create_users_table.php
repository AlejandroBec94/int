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

            // "UserPhotoID","UserSkype","UserPhone","UserBorn","UserSex","UserChief"

            $table->increments('UserID');
            $table->dateTime('DocDate');
            $table->dateTime('LastUpdate');
            $table->string('UserName');
            $table->string('UserNick');
            $table->string('UserEmail')->unique();
            $table->text('UserPassword');
            $table->string('UserJobTitle');
            $table->string('UserCountry');
            $table->string('UserArea');
            $table->string('UserPhotoID');
            $table->string('UserSkype');
            $table->string('UserPhone');
            $table->string('UserBorn');
            $table->string('UserSex');
            $table->string('UserChief');
            $table->rememberToken();

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