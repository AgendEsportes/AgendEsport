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
    Schema::create('espacos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('esporte_id');
        $table->boolean('disponivel');
        $table->timestamps();

        //foreign key (constraints)
        $table->foreign('esporte_id')->references('id')->on('esportes');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('espacos');
    }
};
