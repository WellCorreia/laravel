<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->increments('funcionario_id');
            $table->string('fun_nome',255);
            $table->decimal('fun_salario');
            $table->dateTime('fun_da_nascimento');
            $table->dateTime('fun_da_contratacao');
            //$table->integer('cargoid',11);
            //$table->integer('setorid',11);
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
        Schema::dropIfExists('funcionarios');
    }
}
