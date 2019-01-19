@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
            <form method="POST" action="{{route('editorial.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                @method('PUT')
                <div class="card-header">AGREGA UNA NUEVA EDITORIAL</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input id="nombre" name="nombre" type="text" class="form-control" required value="">
                    </div>
                  
                    
                    <div class="form-group">
                        <label>Descripcion</label>
                        <textarea id="descripcion" name="descripcion" rows=3 class="form-control" required></textarea>
                    </div>
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
