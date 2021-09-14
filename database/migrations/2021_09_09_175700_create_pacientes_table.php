<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
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
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
            $table->string('genero');
            $table->integer('telefono');
            $table->string('calle');
            $table->string('Barrio');
            $table->string('Ciudad');
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('historial__particular_id');
            $table->foreign('historial__particular_id')->references('id')->on('historial__particulars');
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
