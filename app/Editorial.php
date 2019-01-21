<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
   protected $table = 'editorials';
    protected $fillable = ['nombre','descripcion,' ];
    
    public function libro(){
        return $this->hasMany('App\Libro');
    }
    
    
}
