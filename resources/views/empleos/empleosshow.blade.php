@extends('layouts.myapp4')

@section('content')
 

<div class="home-container">
    
<div class="central">
   
 <div class="alert alert-success" role="alert">
        Todas las Empresas creadas
    </div>
<h1></h1>
<div class="center">
    {{$user->name}}<br>
    {{$user->email}}<br>
    
    <div class="list-group" id="list-group-showOfertas">
         @foreach($user->curriculum as $curriculum)
    <a class="list-group-item color-text" href="#">&nbsp;ID:  <div class="text-center color-text">{{$curriculum->id}}</div> </a>
     <a class="list-group-item color-text" href="#">&nbsp;prosefion:  <div class="text-center color-text">{{$curriculum->profesion}}</div> </a>
     <a class="list-group-item color-text" href="#">&nbsp;ID:  <div class="text-center color-text">{{$curriculum->segundo_nombre}}</div> </a>
     <a class="list-group-item color-text" href="#">&nbsp;prosefion:  <div class="text-center color-text">{{$curriculum->zona_horaria}}</div> </a>
     <a class="list-group-item color-text" href="#">&nbsp;ID:  <div class="text-center color-text">{{$curriculum->idiomas}}</div> </a>
     <a class="list-group-item color-text" href="#">&nbsp;prosefion:  <div class="text-center color-text">{{$curriculum->nacionalidad}}</div> </a>
     <a class="list-group-item color-text" href="#">&nbsp;ID:  <div class="text-center color-text">{{$curriculum->estado_civil}}</div> </a>
     <a class="list-group-item color-text" href="#">&nbsp;prosefion:  <div class="text-center color-text">{{$curriculum->tipo_documento}}</div> </a>
     <a class="list-group-item color-text" href="#">&nbsp;ID:  <div class="text-center color-text">{{$curriculum->salario_minimo}}</div> </a>
     <a class="list-group-item color-text" href="#">&nbsp;prosefion:  <div class="text-center color-text">{{$curriculum->biografia}}</div> </a>
   
    <br>
    <hr>
   
    <hr>
    
          @endforeach
  </div>
   
     <br>
    <hr>
  

 </div>
</div>
    
  @include('includes.banner')    
</div>

@endsection