<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;
    
    protected $table = 'citas';
    protected $fillable = ['motivo,observacion,fecha,hora,receta'];
}

