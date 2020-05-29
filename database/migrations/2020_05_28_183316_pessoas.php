<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pessoas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->string('nome');
            $table->boolean('sexo');
            $table->date('data_nascimento');
            $table->string('telefone');
            $table->string('cpf');
            $table->string('email');
            $table->char('escolaridade');
            $table->string('senha');
            $table->string('confirmarSenha');
            $table->string('fotoPerfil')->nullable();
            $table->boolean('envioFormulario');
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
        //
    }
}
