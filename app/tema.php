<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tema extends Model
{
    protected $fillable = [
        'title', 'body',
    ];
}
