<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Personal;
use App\Models\Agenda;
use App\Models\Historial_Medico;

class Empleado extends Model
{
    use HasFactory;
    public function personal(){
        return $this->belongsTo(Personal::class);
    }
    public function agenda(){
        return $this->belongsTo(Agenda::class);
    }
    public function historial__medico(){
        return $this->hasMany(Historial_Medico::class);
    }
}
