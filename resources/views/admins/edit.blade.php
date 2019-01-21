@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <form method="POST" action="{{route('tipos.update',['user'=>$user])}}">
                @csrf
               @method('PUT')
                <div class="card-header">Cambiar nivel de usuario</div>
                <div class="card-body">
                    <div class="form-group">
                        
                        
                        
     
                     
    <h5>este usuario es::<h6>{{$user->name}}</h6> </h5>                    
    
    @if($user->tipo=="admin")
    
    desea cambiar el usuario a normal
    
   <br>  <label>si</label><input type="radio" id="tipo" name="tipo" value="normal">
   
    
    @else
    
    
    desea cambiar el usuario a admin
   <br> 
     <label>si</label><input type="radio" id="tipo" name="tipo" value="admin">
    
    
    
    @endif
          
        
            
            
                   
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
                    <a class="btn btn-light btn-sm" href="{{route('tipos.index')}}">Cancelar</a>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
