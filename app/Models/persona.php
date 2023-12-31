<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $guarded = []; 
    public function dato_ubicacion(){
        return $this->belongsTo(dato_ubicacion::class,'dato_ubicacions_id');
    }
    
    public function doctor(){
        return $this->hasOne(doctor::class, 'personas_id');
    }

    public function paciente(){
        return $this->hasOne(paciente::class,'personas_id');
    }
    public function tipo_persona(){
        return $this->belongsTo(tipo_persona::class);
    }
    
}
