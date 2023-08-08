<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MCertificacion extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'descripcion_en',
        'icono',
    ];
}
