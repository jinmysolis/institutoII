@extends('layouts.myapp4')

@section('content')

<!--@include('includes.menuEmpresaEmpleos')  -->

   
<h1>aqui van las ofertas de las compañias que necesitan empleados</h1>
<div class="home-container">
  
    <div class="row text-center" id="row-pempresa">
    
    @forelse($pempresa as $pempresa)
      <div class="col-6">
      <div class="text-center">

        
           
    <section class="cta img-thumbnail">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-sm-12 text-lg-left text-center">
            <h2>
               <span class="span-pempresa">Se solicita: </span>  {{$pempresa->titulo_oferta}}
            </h2>

              <p id="span-pempresa-container">
                <span class="span-pempresa">Funciones: </span>{{$pempresa->tareas}}<br>
                <span class="span-pempresa">Resposable: </span>{{$pempresa->user->name}}<br>
                <span class="span-pempresa">Fecha: </span>{{$pempresa->created_at}}
            </p>
          </div>

          <div class="col-lg-3 col-sm-12 text-lg-right text-center">
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
    @include('includes.banner')    
</div>
@endsection