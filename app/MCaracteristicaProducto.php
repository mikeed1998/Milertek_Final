<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MCaracteristicaProducto extends Model
{
    protected $fillable = [
        'producto',
        'caracteristica',
        'caracteristica_en',
    ];
}
