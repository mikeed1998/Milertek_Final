<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MProductos extends Model
{
    protected $fillable = [
        'categoria', 
        'nombre',
        'descripcion',
        'nombre_en',
        'descripcion_en',
        'precio_mxn',
        'precio_usd',
        'ficha_tecnica',
        'foto_principal',
        'stock',
        'sku',
    ];
}
