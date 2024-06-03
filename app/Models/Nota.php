<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'curso',
        'nota1',
        'nota2',
        'nota3',
        'nota4',
        'nota5',
        'promedio',
    ];
}

