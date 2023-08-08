<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MFecha extends Model
{
    protected $fillable = [
        'anio',
        'texto',
        'texto_en',
    ];
}
