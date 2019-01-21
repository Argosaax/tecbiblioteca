@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <h3><div class="card-header">Editoriales</div></h3>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-sm">
                        <thead>
                            <th>Nombre</th>
                            <th>email</th>
  <th>tipo de usuario</th>                          <th>cambiar</th>
                        </thead>
                  <tbody>
                           
                          
     @foreach($User as $user)
                            <tr>
                               <td>{{$user->name}}</td>
                               
 <td>{{$user->email}}</td>  
 <td>{{$user->tipo}}</td>                            <td>
                               <a href="{{route('tipos.edit',$user->id)}}" class="btn btn-warning btn-sm">Actualizar</a>
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
