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
        Schema::create('ocorrencia', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')->references('id')->on('usuarios')->contrained()->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('tipo_ocorrencia');
            $table->longText('conteudo_solucao');
            $table->string('titulo_ocorrencia');
            $table->string('foto_ocorrencia');
            $table->timestamps();
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ocorrencia');
    }
};
