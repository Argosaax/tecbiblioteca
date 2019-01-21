<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';
    protected $fillable = ['nombre', 'descripcion', 'precio', ];
    
    public function editorial(){
        return $this->belongsTo('App\Editorial');
    }


public function autores(){
        return $this->belongsTo('App\Autor');
    }
public function categoria(){
        return $this->belongsTo('App\Categoria');
    }


}
