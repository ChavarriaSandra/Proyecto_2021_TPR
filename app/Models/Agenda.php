<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cita;
use App\Models\Empleado;
class Agenda extends Model
{
    use HasFactory;
    public function cita(){
        return $this->belongsTo(Cita::class);
    }
    public function empleado(){
        return $this->hasOne(Empleado::class);
    }
}
