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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nome',80)->nullable();
            $table->string('login',30);
            $table->string('senha',100);
            $table->string('email',30);
            $table->string('pais',30)->nullable();
            $table->string('uf',2)->nullable();
            $table->string('cidade',50)->nullable();
            $table->string('bairro',50)->nullable();
            $table->string('rua',50)->nullable();
            $table->string('complemento',50)->nullable();
            $table->string('numero',20)->nullable();
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
        Schema::dropIfExists('usuarios');
    }
};
