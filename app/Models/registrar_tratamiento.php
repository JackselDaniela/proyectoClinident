<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Softdeletes;

class registrar_tratamiento extends Model
{
    use HasFactory;
    use Softdeletes;
    protected $guarded = []; 
    protected $fillable=['id','nom_tratamiento','costo_tratamiento','codigo_tratamiento','fecha_añadido','especialidad_tratamiento'];
     
 
}
