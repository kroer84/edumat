<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class opciones extends Model
{
    protected $fillable = [
        'pregunta_id', 'opcion',
    ];
}
