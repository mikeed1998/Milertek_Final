<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MCategorias extends Model
{
    protected $fillable = [
        'categoria',
        'categoria_en',
        'icono',
    ];
}
