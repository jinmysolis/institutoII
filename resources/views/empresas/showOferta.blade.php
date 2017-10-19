@extends('layouts.myapp4')

@section('content')
@include('includes.menuIconos') 
  

<div class="home-container">
    @if (auth()->user()->tipoCuenta === 'personal') 
           @include('includes.menuLateralPersona')  
      @else
        
      @include('includes.menuLateral')  
        
        
    @endif  
<div class="central">
    @include('includes.menuEmpresaEmpleos')
 <div class="alert alert-success" role="alert">
        Todas los empleos publicados
    </div>
<h1></h1>
<div class="center">
    {{$user->name}}<br>
    
    <div class="list-group" id="list-group-showOfertas">
         @foreach($user->empleos as $empleo)
<a class="list-group-item color-text" href="#">&nbsp;TITULO:  <div class="text-center color-text"> {{$empleo->titulo_oferta}}</div> </a>
<a class="list-group-item color-text" href="#">&nbsp;AREA:  <div class="text-center color-text"> {{$empleo->area}}</div> </a>
<a class="list-group-item color-text" href="#">&nbsp;Tipo de Contrato <div class="text-center color-text">{{$empleo->tipo_contrato}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp;Tipo de jornada <div class="text-center color-text">{{$empleo->
tipo_jornada}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; Estudios <div class="text-center color-text"> {{$empleo->estudios_minimos}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; Experiencia <div class="text-center color-text"> {{$empleo->anos_experiencia}} AÑOS</div></a>
<a class="list-group-item color-text" href="#">&nbsp; TAREAS <div class="text-center color-text"> {{$empleo->tareas}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; SALARIO <div class="text-center color-text"> {{$empleo->salario}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; PAIS <div class="text-center color-text"> {{$empleo->pais2}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; CIUDAD <div class="text-center color-text"> {{$empleo->ciudad2}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; ESTADO <div class="text-center color-text"> {{$empleo->estado2}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; EDAD MINIMA <div class="text-center color-text"> {{$empleo->edad_minima}}</div></a>

  <a class="list-group-item color-text" href="#">&nbsp; EDAD MAXIMA <div class="text-center color-text"> {{$empleo->edad_maxima}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; IDIOMAS <div class="text-center color-text"> {{$empleo->idiomas}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; NIVEL IDIOMA <div class="text-center color-text"> {{$empleo->idioma_nivel}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; VIAJAR <div class="text-center color-text">  {{$empleo->viajar}}</div></a>
<a class="list-group-item color-text" href="#">&nbsp; LICENCIA <div class="text-center color-text">  {{$empleo->licencia}}</div></a>         
           
            
            
    <br>
    <hr>
    <a class="list-group-item color-text" href="#">&nbsp;EMPLEOS PUBLICADOS:  </a>
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