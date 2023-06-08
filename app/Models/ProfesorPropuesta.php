<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfesorPropuesta extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'profesor_propuesta';
}
