@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <form method="POST" action="{{route('libro.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PUT')
                <div class="card-header">Agregar un nuevo libro</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" required value="">
                    </div>
     <div class="card-body">
                    <div class="form-group">
                        <label>precio</label>
                        <input id="nombre" name="precio" type="text" class="form-control" required value="">
                    </div> 
                    
 
 <select name="autor_id">  
                    <option>Autores</option>
     @foreach($Autor as $autor)        
        <option value=" {{$autor->nombres}}" >{{$autor->nombres}}</option>      
                
                
                		@endforeach
        </select>   
        
 
 
               
                    
                                  <select name="editorial_id">  
                    <option>Editorial</option>
     @foreach($Editorial as $editorial)        
        <option value=" {{$editorial->nombre}}" >{{$editorial->nombre}}</option>      
                
                
                		@endforeach
        </select>   
        
        
        
        
     
        
        
        
        
        
        
        <select name="categoria_id">  
                    <option>Categoria</option>
     @foreach($Categoria as $categoria)        
        <option value=" {{$categoria->nombre}}" >{{$categoria->nombres}}</option>      
                
                
                		@endforeach
        </select>     
             
                    
                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea id="descripcion" name="descripcion" rows=3 class="form-control" required></textarea>
                    </div>
                </div>
                
  <div class="card-body">
                    <div class="form-group">
                        <label>PORTADA</label>
                        <input id="portada" name="portada" type="file" class="form-control" required value="">
                    </div>                   
                
                
                
                
                
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                    <a class="btn btn-light btn-sm" href="{{route('libro.index')}}">Cancelar</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
