<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    protected $fillable = [
        'cuestionario_id', 'pregunta','res_user', 'res_true',
    ];
}