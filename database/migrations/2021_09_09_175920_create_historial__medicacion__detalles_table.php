<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialMedicacionDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial__medicacion__detalles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('medicacion__detalle_id');
            $table->foreign('medicacion__detalle_id')->references('id')->on('medicacion__detalles');
            $table->unsignedBigInteger('historial__medico_id');
            $table->foreign('historial__medico_id')->references('id')->on('historial__medicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial__medicacion__detalles');
    }
}
