<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';

    public function propuestasConPivot(){
        return $this->belongsToMany(Propuesta::class)->withPivot('estado');
    }
}
