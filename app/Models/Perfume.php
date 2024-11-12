<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;
    protected $table = 'perfumen';
    protected $fillable = [
        'marca',
        'nombre',
        'notas',
        'tamaño'
    ];
}