<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $fillable = [
        'Clave',
        'zona_cliente',
        'tipo_cliente',
        'nombre',
        'rfc',
        'email',
        'estatus',
    ];
}

