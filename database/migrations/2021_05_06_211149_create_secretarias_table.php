<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecretariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretarias', function (Blueprint $table) {
            $table->id();
            $table->string("ci")->unique();
            $table->string("apellidos");
            $table->string("nombres");
            $table->date("f_nac");
            $table->string("cel")->unique();
            $table->unsignedBigInteger('salario_id')->onDelete('cascade');
            $table->foreign('salario_id')->references('id')->on('salarios');
            $table->unsignedBigInteger('turnos_id');
            $table->foreign('turnos_id')->references('id')->on('turnos');
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
        Schema::dropIfExists('secretarias');
    }
}
