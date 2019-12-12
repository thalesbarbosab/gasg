<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('estado');
            $table->string('cidade');
            $table->string('bairro');
            $table->bigInteger('cep');
            $table->string('logradouro');
            $table->integer('num_logradouro');
            $table->unsignedBigInteger('id_programa');
            $table->foreign('id_programa')->references('id')->on('programas_sociais');
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
        Schema::dropIfExists('familia');
    }
}
