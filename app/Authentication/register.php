<?php

namespace App\Authentication;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age',
        'password',

    ];
}
