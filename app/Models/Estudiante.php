<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'estudiantes';
    protected $primaryKey = 'rut';
    protected $keyType = 'string';
    public $incrementing = false;

    public function propuestas():HasMany{
        return $this->hasMany(Propuesta::class,'estudiante_rut','rut');
    }
}
