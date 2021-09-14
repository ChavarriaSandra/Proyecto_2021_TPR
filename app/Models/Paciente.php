<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Historial_Particular;
use App\Models\Historia_Previa;
use App\Models\Historial_Medico;
use App\Models\Medicacion_Detalle;
class Paciente extends Model
{
    use HasFactory;
    public function historial__particular(){
        return $this->belongsTo(Historial_Particular::class);
    }
    public function historia_previa(){
        return $this->hasOne(Historia_Previa::class);
    }
    public function historial_medico(){
        return $this->hasOne(Historial_Medico::class);
    }
    public function medicacion_detalle(){
        return $this->hasMany(Medicacion_Detalle::class);
    }
}
