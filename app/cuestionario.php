<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuestionario extends Model
{
    protected $fillable = [
        'user_id', 'tema_id','calif',
    ];
}
