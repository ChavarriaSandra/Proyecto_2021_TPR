<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Models\Tratamiento;
use App\Models\Paciente;
use App\Models\Historial_Medicacion_Detalle;

class Medicacion_Detalle extends Model
{
    use HasFactory;
    public function tratamiento(){
        return $this->belongsTo(Tratamiento::class);
    }
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
    public function historial_medicacion_detalle(){
        return $this->hasMany(Historial_Medicacion_Detalle::class);
    }
}
