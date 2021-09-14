<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medicacion_Detalle;

class Tratamiento extends Model
{
    use HasFactory;
    public function medicacion__detalle(){
        return $this->hasMany(Medicacion_Detalle::class);
    }
}
