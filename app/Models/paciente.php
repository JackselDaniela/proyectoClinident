<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function persona(){
        return $this->belongsTo(persona::class,'personas_id');
    }
    public function expediente(){
        return $this->hasOne(expediente::class,'pacientes_id');
    }
    

}
