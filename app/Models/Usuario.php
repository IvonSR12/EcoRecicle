<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios'; // nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'correo',
        'password',
    ];

    public $timestamps = true; // para usar created_at y updated_at
}
