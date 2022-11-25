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
        Schema::create('comprimisso', function (Blueprint $table) {
            $table->id();
            $table->foreignId('animal_id')->references('id')->on('pet')->contrained()->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->date('data');
            $table->time('hora');
            $table->string('nota')->nullable();
            $table->string('compromisso');
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
        Schema::dropIfExists('agenda');
    }
};
