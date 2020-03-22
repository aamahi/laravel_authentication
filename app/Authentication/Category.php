<?php

namespace App\Authentication;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'slug',
    ];
    public function registers(){
        return $this->hasMany('App\Authentication\register');
    }
}
