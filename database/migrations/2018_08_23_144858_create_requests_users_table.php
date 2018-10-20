<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // protected $fillable = ['UserTools','OtherTool','RequestComment'];

        Schema::table('RequestUsers', function (Blueprint $table) {
            $table->increments('RequestID');
            $table->dateTime('DocDate');
            $table->integer('RequestUserID');
            $table->string('UserName');
            $table->string('MoveRequest');
            $table->string('TypePlace');
            $table->string('UserReplace');
            $table->string('UserEquipment');
            $table->string('UserJobTitle');
            $table->string('UserChiefID');
            $table->dateTime('RequestDate');
            $table->string('UserTools');
            $table->string('OtherTool');
            $table->string('RequestComment');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RequestUsers');

    }
}
