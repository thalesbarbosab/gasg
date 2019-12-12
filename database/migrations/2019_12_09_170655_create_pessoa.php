<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('familia_id')->nullable()->default(NULL);
            $table->foreign('familia_id')->references('id')->on('familias');
            $table->string('nome');
            $table->string('sexo');
            $table->date('data_nascimento');
            $table->string('naturalidade');
            $table->bigInteger('cpf');
            $table->bigInteger('rg');
            $table->string('estado_civil');
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
        Schema::dropIfExists('pessoa');
    }
}
