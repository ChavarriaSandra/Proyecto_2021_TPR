<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Historial_Medico;

class Historial_Medicacion_Detalle extends Model
{
    use HasFactory;
    public function historial_medico(){
        return $this->belongsTo(Historial_Medico::class);
    }
}
