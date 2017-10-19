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
<h1>aqui van las ofertas de las compañias que necesitan empleados</h1>

  
    <div class="row text-center" id="row-pempresa">
    
    @forelse($pempresa as $pempresa)
      <div class="col-6">
      <div class="text-center">

        
           
    <section class="cta img-thumbnail">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-sm-6 text-lg-left text-center">
            <h2>
               <span class="span-pempresa">Se solicita: </span>  {{$pempresa->titulo_oferta}}
            </h2>

              <p id="span-pempresa-container">
                <span class="span-pempresa">Funciones: </span>{{$pempresa->tareas}}<br>
                <span class="span-pempresa">Resposable: </span>{{$pempresa->user->name}}<br>
                <span class="span-pempresa">Fecha: </span>{{$pempresa->created_at}}
            </p>
            <a class="btn btn-ghost" href="{{ url('/publicarOferta',$pempresa->id) }}">Mas informacion</a>
          </div>

          
        </div>
      </div>
    </section>
        
        

        <hr>
            
        
      </div>
      </div>
    @empty
    <p>No hay mensajes destacados</p>
    @endforelse
   </div>  

    
</div>
    @include('includes.banner')    
</div>
@endsection