<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistorialClinico extends Model
{
    
            
    
    use HasFactory;
    protected $table = 'historialclinico';
    protected $fillable = ['ocupacion,enfermedad_actual,alergias,enfermedad_herencia,tipo_sangre,tabaquismo,alcoholismo,drogodependencias,id_paciente,id_medico'];
}
