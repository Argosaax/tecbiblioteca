<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{

protected $table = 'autors';
    protected $fillable = ['nombre','descripcion,' ];


   public function libro(){
        return $this->hasMany('App\Libro');
    }
}
