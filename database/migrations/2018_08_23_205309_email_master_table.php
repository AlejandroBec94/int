<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmailMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('EmailMaster', function (Blueprint $table) {
            $table->increments('EmailID');
            $table->dateTime('DocDate');
            $table->dateTime('LastUpdate');
            $table->string('Email');
            $table->integer('EmailArea');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('EmailMaster');
    }
}
