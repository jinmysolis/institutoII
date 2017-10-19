@extends('layouts.myapp4')

@section('content')

<!--@include('includes.menuEmpresaEmpleos')  -->

 
<h1>Detalles de la Oferta</h1>
<div class="list-group" id="list-group-showOfertas">
    <a class="list-group-item color-text" href="#"><i class="fa fa-users fa-fw fa-3x" aria-hidden="true"></i>&nbsp;AREA:  <div class="text-center color-text">{{$pempresa->area}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-american-sign-language-interpreting fa-fw fa-3x" aria-hidden="true"></i>&nbsp;Tipo de Contrato <div class="text-center color-text">{{$pempresa->tipo_contrato}}</div></a>
     <a class="list-group-item color-text" href="#"><i class="fa fa-pencil fa-fw fa-3x" aria-hidden="true"></i>&nbsp;Tipo de jornada <div class="text-center color-text">{{$pempresa->tipo_jornada}}</div></a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-graduation-cap fa-fw fa-3x" aria-hidden="true"></i>&nbsp; Estudios <div class="text-center color-text">{{$pempresa->estudios_minimos}}</div></a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-history fa-fw fa-3x" aria-hidden="true"></i>&nbsp; Experiencia <div class="text-center color-text">{{$pempresa->anos_experiencia}} AÑOS</div></a>
  

</div>
<ul class="ul-show-oferta">
    <li class="li-show-oferta">SALARIO<div>{{$pempresa->salario}}</div></li>
    <li class="li-show-oferta">PAIS<div>{{$pempresa->pais2}}</div></li>
    <li class="li-show-oferta">CIUDAD<div>{{$pempresa->ciudad2}}</div></li>
    <li class="li-show-oferta">ESTADO<div>{{$pempresa->estado2}}</div></li>
    <li class="li-show-oferta">EDAD-MINIMA<div>{{$pempresa->edad_minima}}AÑOS</div></li>
    <li class="li-show-oferta">EDAD-MAXIMA<div>{{$pempresa->edad_maxima}}AÑOS</div></li>
    <li class="li-show-oferta">IDIOMA<div>{{$pempresa->idiomas}}</div></li>
    <li class="li-show-oferta">NIVEL<div>{{$pempresa->idioma_nivel}}</div></li>
    <li class="li-show-oferta">VIAJAR<div>{{$pempresa->viajar}}</div></li>
    <li class="li-show-oferta">LICENCIA<div>{{$pempresa->licencia}}</div></li>
 </ul>
<div class="list-group" id="list-group-showOfertas">
    <a class="list-group-item color-text" href="#"><i class="fa fa-lightbulb-o fa-fw fa-3x" aria-hidden="true"></i>&nbsp;FUNCIONES PRINCIPALES::  <div class="text-left color-text">{{$pempresa->tareas}}</div> </a>
    
  

</div>
<div class="text-center">       
   <a href="{{ url('/publicarOferta') }}"class="btn btn-success ">Regresar</a>
</div>            

@endsection