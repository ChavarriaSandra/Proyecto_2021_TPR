<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Historia_Previa;
use App\Models\Agenda;
class Cita extends Model
{
    use HasFactory;
    public function historia__previa(){
        return $this->belongsTo(Historia_Previa::class);
    }
    public function agenda(){
        return $this->hasOne(Agenda::class);
    }
}
