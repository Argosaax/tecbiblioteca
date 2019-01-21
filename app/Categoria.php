<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    
    
    protected $table = 'categorias';
    protected $fillable = ['nombre','descripcion,' ];


   public function libro(){
        return $this->hasMany('App\Libro');
    }
    
    
    
}
