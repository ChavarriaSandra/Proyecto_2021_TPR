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
    /*tabla intermedia*/
    public function up()
    {
        Schema::create('historial__medicacion__detalles', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('historial__medicacion__detalles');
    }
}
