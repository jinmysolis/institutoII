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
            @include('includes.menuEmpleosCurriculum') 

           <div class="alert alert-success" role="alert">
            <h1>Datos perosonales de: {{$usuario->user->name}} {{$usuario->user->apellidos}}</h1>
            
            
            
           
            
            
            
            
<div class="list-group" id="list-group-showOfertas">
    <a class="list-group-item color-text" href="#">&nbsp;PROFESION:  <div class="text-center color-text">{{$usuario->profesion}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;SEGUNDO NOMBRE <div class="text-center color-text">{{$usuario->segundo_nombre}}</div></a>
     <a class="list-group-item color-text" href="#">&nbsp;ZONA HORARIA <div class="text-center color-text">{{$usuario->zona_horaria}}</div></a>
    <a class="list-group-item color-text" href="#">&nbsp; IDIOMAS <div class="text-center color-text">{{$usuario->idiomas}}</div></a>
    <a class="list-group-item color-text" href="#">&nbsp; NACIONALIDAD <div class="text-center color-text">{{$usuario->nacionalidad}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp;ESTADO CIVIL:  <div class="text-center color-text">{{$usuario->estado_civil}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;TIPO DOCUMENTO <div class="text-center color-text">{{$usuario->tipo_documento}}</div></a>
    <a class="list-group-item color-text" href="#">&nbsp;NUMERO DOCUEMTO <div class="text-center color-text">{{$usuario->cedula_ciudadania}}</div></a>
    <a class="list-group-item color-text" href="#">&nbsp; LICENCIA <div class="text-center color-text">{{$usuario->licencia}}</div></a>
    <a class="list-group-item color-text" href="#">&nbsp; FEHA DE NACIMIENTO <div class="text-center color-text">{{$usuario->fecha_nacimiento}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp; PAIS DE RESIDENCIA <div class="text-center color-text">{{$usuario->pais_residencia}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp; CODIGO DE TELEFONO <div class="text-center color-text">{{$usuario->codigo_telefono}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp; TELEFONO <div class="text-center color-text">{{$usuario->telefono}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp;SALARIO ACEPTADO <div class="text-center color-text">{{$usuario->salario_minimo}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp;RIF NIT ISS<div class="text-center color-text">{{$usuario->rif_nit_iss}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp; GENERO <div class="text-center color-text">{{$usuario->genero}} </div></a>
    
  

</div>
  @include('includes.menuCurriculum') 


             
</div>
        
       
       
          
        </div> 
       
       @include('includes.banner')     
    
</div>
@endsection