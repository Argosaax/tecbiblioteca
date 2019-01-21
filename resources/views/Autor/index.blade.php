@extends('layouts.app')


@section('content')
<h1>aqui se veran las Autores</h1>
  
 @if(Auth::user()->tipo=="admin") 
     <li class="nav-item">
                        <a class="nav-link" href ="{{route('autores.create')}}">crear autores</a>
                        </li>    
   
     @endif                   
  
  
  
  
  
  
  
  
  
  
  
   
  
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <h3><div class="card-header">Autores</div></h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-sm">
                        <thead>
                            <th>Nombre</th>
                            <th>Descripcion</th>
 <th>Ver libros</th>                           
                            
                        </thead>
                  <tbody>
                           
                          
     @foreach($Autor as $autor)
                            <tr>
                               <td>{{$autor->nombres}}</td>
                               
 <td>{{$autor->descripcion}}</td>                              <td>
                               <a href="#" class="btn btn-info btn-sm">Libros</a>
                     
                               </td>
                            </tr>
                            @endforeach
                                            
                          
                          
                          
                          
                           
                           
                            </tbody>
                    </table>
                </div>

                
            </div>
        </div>
    </div>
</div>
  
  
  
  
 @endsection