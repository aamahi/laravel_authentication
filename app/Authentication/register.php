<?php

namespace App\Authentication;

use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    protected $fillable = [
        'name',
        'email',
        'age',
        'category_id',
        'image',
        'password',

    ];
    public function categories(){
        return $this->hasOne('App\Authentication\Category','id','category_id');
    }

}
