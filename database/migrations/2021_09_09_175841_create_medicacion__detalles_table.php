<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicacionDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicacion__detalles', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_medicamento');
            $table->string('dosis');
            $table->string('indicacion');
            $table->date('duracion');
            $table->time('horario');
            $table->timestamps();
            $table->unsignedBigInteger('tratamiento_id');
            $table->foreign('tratamiento_id')->references('id')->on('tratamientos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicacion__detalles');
    }
}
