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
        Schema::create('pet', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tutor_id')->references('id')->on('usuarios')->contrained()->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('nome',60);
            $table->string('altura',60)->nullable();
            $table->string('comprimento',60)->nullable();
            $table->string('raca',60);
            $table->date('idade')->nullable();
            $table->string('peso',10)->nullable();
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
        Schema::dropIfExists('pet');
    }
};
