<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('areas', function (Blueprint $table) {
            $table->increments('AreaID');
            $table->datetime('DocDate');
            $table->string('AreaName');
            $table->string('AreaAcronym');
            $table->text('AreaPermissions');
            $table->string('AreaDescription',250);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
