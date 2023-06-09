<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profesor extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'profesores';
    protected $primaryKey = 'rut';
    protected $keyType = 'string';
    public $incrementing = false;
    //CAMBIAR A LA TABLA 2
    public function propuestas(){
        return $this->belongToMany(Propuesta::class,'profesor_rut','rut');
    }

    public function propuestasConPivot(){
        return $this->belongToMany(Propuesta::class,'profesor_rut','rut')->whitPivot(['fecha','hora','comentario']);
    }
}
