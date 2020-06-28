<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->string('email', 50)->nullable();
            $table->string('cpf', 11);
            $table->string('endereco', 100)->nullable();
            $table->string('cidade', 20)->nullable();
            $table->string('estado', 20)->nullable();
            $table->string('bairro', 20)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('cep', 8)->nullable();
            $table->unsignedBigInteger('planos_id', false);
            $table->foreign('planos_id')->references('id')->on('planos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
