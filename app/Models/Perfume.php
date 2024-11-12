<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;

    // Nombre de la tabla
    protected $table = 'perfumen';

    // Campos que se pueden asignar de manera masiva
    protected $fillable = [
        'marca',
        'nombre',
        'notas',
        'tamaño'
    ];
}