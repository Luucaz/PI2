<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('coordc_id');
            $table->timestamps();
            $table->string('denominação');
            $table->string('tipo');
            $table->integer('modalidade');
            $table->string('habilitação');
            $table->string('local');
            $table->string('turno');
            $table->string('regime');
            $table->integer('vaga');
            $table->integer('carga');
            $table->integer('periodo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
