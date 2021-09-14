<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;
class Historial_Particular extends Model
{
    use HasFactory;
    public function pacientes(){
        return $this->hasOne(Paciente::class);
    }
}
