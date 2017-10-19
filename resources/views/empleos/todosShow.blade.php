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
            <h1>Informacion de contacto</h1>
<div class="list-group" id="list-group-showOfertas">
    @foreach($usuario->curriculum as $usuario)

    <a class="list-group-item color-text" href="#">&nbsp;PROFESION:  <div class="text-center color-text">{{$usuario->profesion}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;SEGUNDO NOMBRE:  <div class="text-center color-text">{{$usuario->segundo_nombre}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;ZONA HORARIA:  <div class="text-center color-text">{{$usuario->zona_horaria}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;IDIOMAS:  <div class="text-center color-text">{{$usuario->idiomas}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;NACIONALIDAD:  <div class="text-center color-text">{{$usuario->nacionalidad}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;ESTADO CIVIL:  <div class="text-center color-text">{{$usuario->estado_civil}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;CEDULA:  <div class="text-center color-text">{{$usuario->cedula_ciudadania}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;LICENCIA:  <div class="text-center color-text">{{$usuario->licencia}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;FECHA DE NACIMIENTO:  <div class="text-center color-text">{{$usuario->fecha_nacimiento}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;LUGAR DE NACIMIENTO:  <div class="text-center color-text">{{$usuario->lugar_nacimiento}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;PAIS DE RESIDENCIA:  <div class="text-center color-text">{{$usuario->pais_residencia}}</div> </a>
    
    <a class="list-group-item color-text" href="#">&nbsp;CIUDAD:  <div class="text-center color-text">{{$usuario->ciudad}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;CODIGO TELEFONO:  <div class="text-center color-text">{{$usuario->codigo_telefono}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;TELEFONO:  <div class="text-center color-text">{{$usuario->telefono}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;SALARIO ACEPTADO:  <div class="text-center color-text">{{$usuario->salario_minimo}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;RIF-NIT-ISS:  <div class="text-center color-text">{{$usuario->rif_nit_iss}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;GENERO:  <div class="text-center color-text">{{$usuario->genero}}</div> </a>
    
    
    
    <ul class="ul-show-oferta">
                         
       <a href="{{ url('/showFormacion',$usuario->user_id) }}" class="btn btn-success btn-lg">ESTUDIOS</a>
       <a href="{{ url('/showExperiencia',$usuario->user_id) }}" class="btn btn-success btn-lg">EXPERIENCIAS</a>
       <a href="{{ url('/showConocimientos',$usuario->user_id) }}" class="btn btn-success btn-lg">CURSOS</a>
   
    
    </ul>
    
    @endforeach
  

</div>
 


             
</div>
       
                          <form>
                            
                              <input type="button" value="volver atrás" name="volver atrás2" onclick="history.back()" class="btn btn-success btn-lg"/>
                            
                          </form>
          
        </div> 
       
       @include('includes.banner')     
    
</div>
@endsection