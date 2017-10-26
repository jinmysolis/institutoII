@extends('layouts.myapp4')

@section('content')
<div class="container-fluid">
    <div class="row">
        
@include('includes.menuIconos') 

<div class="home-container">
    
    
 @if (auth()->user()->tipoCuenta === 'personal') 
           @include('includes.menuLateralPersona')  
      @else
        
      @include('includes.menuLateral')  
        
        
    @endif
    
    <div class="central">   
   
   
   <h1>aqui van las ofertas de las compañias que necesitan empleados </h1>
   @if( session()->has('info'))       
    <div class="alert alert-success" role="alert">
    {{ session('info') }}
     </div>
   @endif
   
   
   @forelse($pempresa as $pempresa)
     
      

        
           
    <section class="cta img-thumbnail">
      <div class="contai">
        <div class="row-contai">
          <div class="row-contai-cont">
            <h2>
               <span class="span-pempresa">Se solicita: </span>  {{$pempresa->titulo_oferta}}
            </h2>

              <p id="span-pempresa-container">
                <span class="span-pempresa">Funciones: </span>{{$pempresa->tareas}}<br>
                <span class="span-pempresa">Resposable: </span>{{$pempresa->user->name}}<br>
                <span class="span-pempresa">Fecha: </span>{{$pempresa->created_at}}
              </p>
              
              <div class="row-contai-cont-a">
            <a class="btn btn-ghost" href="{{ url('/publicarOferta',$pempresa->id) }}">Mas informacion</a>
            <a class="btn btn-ghost" href="{{ url('/postular',$pempresa->user_id) }}">postularte</a>
            </div>
          </div>

          
        </div>
      </div>
    </section>
        
        

        <hr>
            
        
     
      
    @empty
    <p>No hay mensajes destacados</p>
    @endforelse
    
   </div>
    
    
    @include('includes.banner')    


</div></div>
@endsection