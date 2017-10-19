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
            <h1>Estudios realizados</h1>
<div class="list-group" id="list-group-showOfertas">
    <div class="alert alert-success" role="alert">
      FORMACION PRIMARIA
    </div>
    <a class="list-group-item color-text" href="#">&nbsp;CENTRO EDUCATIVO:  <div class="text-center color-text">{{$formacion->centro_educativo_primaria}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;ESTADO: <div class="text-center color-text">{{$formacion->estado_primaria}}</div></a>
     <a class="list-group-item color-text" href="#">&nbsp;DESDE:<div class="text-center color-text">{{$formacion->ano_inicio_primaria}}</div></a>
    <a class="list-group-item color-text" href="#">&nbsp; HASTA :<div class="text-center color-text">{{$formacion->ano_fin_primaria}}</div></a>
     <div class="alert alert-success" role="alert">
       FORMACION SECUNDARIA
     </div>
    <a class="list-group-item color-text" href="#">&nbsp;CENTRO EDUCATIVO: <div class="text-center color-text">{{$formacion->centro_educativo_secundaria}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp;ESTADO:  <div class="text-center color-text">{{$formacion->estado_secundaria}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;DESDE: <div class="text-center color-text">{{$formacion->ano_inicio_secundaria}}</div></a>
    <a class="list-group-item color-text" href="#">&nbsp;HASTA : <div class="text-center color-text">{{$formacion->ano_fin_secundaria}}</div></a>
    <div class="alert alert-success" role="alert">
       UNIVERSIDAD
    </div>
    <a class="list-group-item color-text" href="#">&nbsp; CENTRO EDUCATIVO <div class="text-center color-text">{{$formacion->centro_educativo_universidad}}</div></a>
    <a class="list-group-item color-text" href="#">&nbsp; ESTADO: <div class="text-center color-text">{{$formacion->estado_universidad}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp; DESDE: <div class="text-center color-text">{{$formacion->ano_inicio_universidad}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp; HASTA : <div class="text-center color-text">{{$formacion->ano_fin_universidad}} </div></a>
    <div class="alert alert-success" role="alert">
       POSGRADO
    </div>
    <a class="list-group-item color-text" href="#">&nbsp; CENTRO EDUCATIVO <div class="text-center color-text">{{$formacion->centro_educativo_posgrado}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp;ESTADO: <div class="text-center color-text">{{$formacion->estado_posgrado}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp;DESDE:<div class="text-center color-text">{{$formacion->ano_inicio_posgrado}} </div></a>
    <a class="list-group-item color-text" href="#">&nbsp; HASTA : <div class="text-center color-text">{{$formacion->ano_fin_posgrado}} </div></a>
    
  

</div>
    @include('includes.menuCurriculum') 


             
         </div>
        
       
       
          
        </div> 
       
       @include('includes.banner')     
    
</div>
@endsection