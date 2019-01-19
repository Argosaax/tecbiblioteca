@extends('layouts.app')


@section('content')
<h1>aqui se veran las Autores</h1>
  
  
  <li class="nav-item">
                        <a class="nav-link" href ="{{route('autores.create')}}">crear autores</a>
                        </li>    
  
  
 @endsection