<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoafisica_id')->unsigned();
            $table->foreign('pessoafisica_id')->references('id')->on('pessoafisica')->onDelete('cascade');
            $table->integer('servico_id')->unsigned();
            $table->foreign('servico_id')->references('id')->on('servico')->onDelete('cascade');
            $table->dateTime('datahora');
            $table->enum('status', ['S', 'A', 'C', 'F']);
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
        Schema::dropIfExists('agendamentos');
    }
}
