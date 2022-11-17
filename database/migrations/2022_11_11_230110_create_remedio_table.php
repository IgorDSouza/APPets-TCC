<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remedio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_id')->references('id')->on('pet')->contrained()->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('nome',80);
            $table->integer('dosagem');


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
        Schema::dropIfExists('remedio');
    }
};
