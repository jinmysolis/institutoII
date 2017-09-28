@extends('layouts.myapp4')

@section('content')

<!--@include('includes.menuEmpresaEmpleos')  -->

   
<h1>aqui van las ofertas de las compañias que necesitan empleados</h1>

<div class="row text-center">
    
    @forelse($pempresa as $pempresa)
      <div class="col-6">
      <div class="text-center">

        
           
        <section class="cta">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-sm-12 text-lg-left text-center">
            <h2>
               <span>Se solicita: </span>  {{$pempresa->titulo_oferta}}
            </h2>

            <p>
                <span>Funciones: </span>{{$pempresa->tareas}}<br>
                <span>Empresa: </span>{{$pempresa->user->name}}<br>
                <span>Fecha: </span>{{$pempresa->created_at}}
            </p>
          </div>

          <div class="col-lg-3 col-sm-12 text-lg-right text-center">
            <a class="btn btn-ghost" href="#">Mas informacion</a>
          </div>
        </div>
      </div>
    </section>
        
        
<!--           area: {{$pempresa->area}}<br><br>
           jornada: {{$pempresa->tipo_jornada}}<br>
           contrato: {{$pempresa->tipo_contrato}}<br>
           tareas:{{$pempresa->tareas}}<br>
           salario: {{$pempresa->salario}}<br>
            pais :{{$pempresa->pais2}}<br>
            ciudad:{{$pempresa->ciudad2}}<br>
            estado:{{$pempresa->estado2}}<br>
            experiencia:{{$pempresa->anos_experiencia}}<br>
           edad minima: {{$pempresa->edad_minima}}<br>
            edad:maxima{{$pempresa->edad_maxima}}<br>
            estudios:{{$pempresa->estudios_minimos}}<br>
           idioma: {{$pempresa->idiomas}}<br>
           nivel: {{$pempresa->idioma_nivel}}<br>
           viajar: {{$pempresa->viajar}}<br>
            licencia:{{$pempresa->licencia}}<br>-->
        <hr>
            
        
      </div>
      </div>
    @empty
    <p>No hay mensajes destacados</p>
    @endforelse
    
    
</div>

@endsection