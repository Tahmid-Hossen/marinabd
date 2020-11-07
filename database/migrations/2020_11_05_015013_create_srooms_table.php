<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('room_two');
            $table->string('room_three');
            $table->string('room_four');
            $table->string('room_five');
            $table->string('room_six');
            $table->string('room_seven');
            $table->string('room_eight');
            $table->string('room_nine');
            $table->string('room_ten');
            $table->string('room_eleven');
            $table->string('room_twelve');
            $table->softDeletes();
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
        Schema::dropIfExists('srooms');
    }
}
