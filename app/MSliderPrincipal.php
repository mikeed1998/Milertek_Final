<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MSliderPrincipal extends Model
{
    protected $fillable = [
        'titulo',
        'descripcion',
        'titulo_en',
        'descripcion_en',
        'imagen',
    ];
}
