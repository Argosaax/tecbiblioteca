@extends('layouts.app')


@section('content')
<h1>aqui se veran las editoriales</h1>
  
  
 <li class="nav-item">
                        <a class="nav-link" href ="{{route('editorial.create')}}">crear editorial</a>
                        </li>     
  
  
 @endsection