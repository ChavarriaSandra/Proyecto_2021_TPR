<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empleado;
use App\Models\Paciente;
use App\Models\Historial_Medicacion_Detalle;

class Historial_Medico extends Model
{
    use HasFactory;
    public function empelado(){
        return $this->belongsTo(Empleado::class);
    }
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
    public function historial__medicacion__detalles(){
        return $this->hasMany(Historial_Medicacion_Detalle::class);
    }
}
