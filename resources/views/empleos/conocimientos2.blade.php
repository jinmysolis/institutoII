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
            <h1>Otros conocimientos</h1>
<div class="list-group" id="list-group-showOfertas">
    
    @foreach($user->conocimientos as $conocimientos)
    <a class="list-group-item color-text" href="#">&nbsp;TITUTLO:  <div class="text-center color-text">{{$conocimientos->titulo}}</div> </a>
    <a class="list-group-item color-text" href="#">&nbsp;DESCRIPCION:  <div class="text-center color-text">{{$conocimientos->descripcion}}</div> </a>
   
    
     @endforeach
    
  

</div>
                         

             
         </div>
        
                          <form>
                            
                              <input type="button" value="volver atrás" name="volver atrás2" onclick="history.back()" class="btn btn-success btn-lg"/>
                            
                          </form>
       
          
        </div> 
       
       @include('includes.banner')     
    
</div>





 {{$user->name}}
<h1>pagia donde van las experiencias</h1>
@foreach($user->experiencias as $experiencia)
 <a class="list-group-item color-text" href="#"><i class="fa fa-university fa-fw fa-3x" aria-hidden="true"></i>&nbsp;INFORMACION:  <div class="text-center color-text">{{$experiencia->nombre_empresa}}</div> </a>

@endforeach
@endsection