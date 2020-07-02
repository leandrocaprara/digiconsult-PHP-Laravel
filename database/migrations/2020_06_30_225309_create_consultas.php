<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('medicos_id', false);
            $table->foreign('medicos_id')->references('id')->on('medicos');
            $table->unsignedBigInteger('pacientes_id', false);
            $table->foreign('pacientes_id')->references('id')->on('pacientes');
            $table->dateTime('data');
            $table->text('consulta');
            $table->text('diagnostico');
            $table->text('receita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
