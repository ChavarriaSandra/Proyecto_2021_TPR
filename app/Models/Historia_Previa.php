<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
use App\Models\Cita;

class Historia_Previa extends Model
{
    use HasFactory;
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
    public function cita(){
        return $this->hasOne(Cita::class);
    }

}
