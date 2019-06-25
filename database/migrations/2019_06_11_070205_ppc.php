<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ppc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('ppcs', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('curso_id');
                $table->timestamps();
                $table->string('perfil');
                $table->string('engresso');
                $table->string('acesso');
                $table->string('perfilforma');
                $table->string('avaaprendi');
                $table->string('avacurso');
                $table->string('tcc');
                $table->string('estagio');
                $table->string('def');

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
