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
    Schema::create('agendamentos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('usuario_id');
        $table->unsignedBigInteger('espaco_id');
        $table->dateTime('data_inicio_periodo');
        $table->dateTime('data_final_previsto_periodo');
        $table->dateTime('data_final_realizado_periodo');
        $table->timestamps();

        //foreign key (constraints)
        $table->foreign('usuario_id')->references('id')->on('usuario');
        $table->foreign('espaco_id')->references('id')->on('espacos');
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
};
