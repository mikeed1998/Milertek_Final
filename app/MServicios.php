<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MServicios extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'nombre_en',
        'descripcion_en',
        'foto',
        'contacto',
    ];
}
