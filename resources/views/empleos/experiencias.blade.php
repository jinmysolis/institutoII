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
            <h1>Experiencia laboral</h1>
<div class="list-group" id="list-group-showOfertas">
    
    @foreach($user->experiencias as $experiencia)
    <a class="list-group-item color-text" href="#">&nbsp;NOMBRE DE LA EMPRESA:  <div class="text-center color-text">{{$experiencia->nombre_empresa}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;ACTIVIDAS DE LA EMPRESA:  <div class="text-center color-text">{{$experiencia->actividad_empresa}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;PUESTO DESEMPEÑADO:  <div class="text-center color-text">{{$experiencia->puesto}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;NIVEL DE EXPERIENCIA:   <div class="text-center color-text">{{$experiencia->nivel_experiencia}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;PAIS DE TRABAJO: <div class="text-center color-text">{{$experiencia->pais}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;DESCRIPCION DE PUESTO DE TRABAJO: <div class="text-center color-text">{{$experiencia->descripcion_puesto}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;DESDE:   <div class="text-center color-text">{{$experiencia->ano_inicio_trabajo}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;HASTA: <div class="text-center color-text">{{$experiencia->ano_fin_trabajo}}</div> </a>
    
    
     @endforeach
    
  

</div>
    @include('includes.menuCurriculum') 


             
         </div>
        
       
       
          
        </div> 
       
       @include('includes.banner')     
    
</div>





 {{$user->name}}
<h1>pagia donde van las experiencias</h1>
@foreach($user->experiencias as $experiencia)
 <a class="list-group-item color-text" href="#"><i class="fa fa-university fa-fw fa-3x" aria-hidden="true"></i>&nbsp;INFORMACION:  <div class="text-center color-text">{{$experiencia->nombre_empresa}}</div> </a>

@endforeach
@endsection