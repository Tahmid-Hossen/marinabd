<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinglesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('singles', function (Blueprint $table) {
            $table->id();
            $table->string('a-date')->nullable();
            $table->string('l-date');
            $table->string('name');
            $table->string('email');
            $table->number('phone');
            $table->text('gender');
            $table->number('room');
            $table->string('member');
            $table->string('address');
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
        Schema::dropIfExists('singles');
    }
}
