<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Propuesta extends Model
{
    use HasFactory;
    protected $table = 'propuestas';

    public function estudiante(): HasMany{
        return $this->belongsTo(Estudiante::class,'estudiante_rut','rut');
    }

    public function profesores(){
        return $this->belongsToMany(Profesor::class);
    }

    public function profesoresConPivot(){
        return $this->belongsToMany(Profesor::class)->withPivot(['fecha','hora','comentario']);
    }
}
