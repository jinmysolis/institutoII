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
        Todas las Empresas registradas
    </div>
<h1></h1>
<div class="center">
    {{$user->name}}<br>
    
    <div class="list-group" id="list-group-showOfertas">
         @foreach($user->empresas as $empresa)
    <a class="list-group-item color-text" href="#"><i class="fa fa-sort-numeric-asc fa-fw fa-3x" aria-hidden="true"></i>&nbsp;ID:  <div class="text-center color-text">{{$empresa->id}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-university fa-fw fa-3x" aria-hidden="true"></i>&nbsp;INFORMACION:  <div class="text-center color-text">{{$empresa->informacion_empresa}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-list-ol fa-fw fa-3x" aria-hidden="true"></i>&nbsp;NUMERO TRIBUTARIO:  <div class="text-center color-text">{{$empresa->numero_tributario}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-edge fa-fw fa-3x" aria-hidden="true"></i>&nbsp;SITIO WEB:  <div class="text-center color-text">{{$empresa->sitio_web}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-leanpub fa-fw fa-3x" aria-hidden="true"></i>&nbsp;LEMA:  <div class="text-center color-text">{{$empresa->lema}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-share-square-o fa-fw fa-3x" aria-hidden="true"></i>&nbsp;OBJETO SOCIAL:  <div class="text-center color-text">{{$empresa->objeto_social}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-building-o fa-fw fa-3x" aria-hidden="true"></i>&nbsp;SECTOR EMPRESARIAL:  <div class="text-center color-text">{{$empresa->sector_empresarial}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-arrows fa-fw fa-3x" aria-hidden="true"></i>&nbsp;DIRECCION POSTAL:  <div class="text-center color-text">{{$empresa->Direccion_postal}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-angle-double-down fa-fw fa-3x" aria-hidden="true"></i>&nbsp;CIUDAD:  <div class="text-center color-text">{{$empresa->ciudad2}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-angle-down fa-fw fa-3x" aria-hidden="true"></i>&nbsp;ESTADO:  <div class="text-center color-text">{{$empresa->estado2}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-exchange fa-fw fa-3x" aria-hidden="true"></i>&nbsp;CODIGO POSTAL:  <div class="text-center color-text">{{$empresa->codigo_postal}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-connectdevelop fa-fw fa-3x" aria-hidden="true"></i>&nbsp;PAIS:  <div class="text-center color-text">{{$empresa->pais2}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-phone fa-fw fa-3x" aria-hidden="true"></i>&nbsp;TELEFONO:  <div class="text-center color-text">{{$empresa->telefono}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-envelope-o fa-fw fa-3x" aria-hidden="true"></i>&nbsp;NOMBRE DE CONTACTO:  <div class="text-center color-text">{{$empresa->nombre_contacto}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-caret-square-o-right fa-fw fa-3x" aria-hidden="true"></i>&nbsp;CARGO:  <div class="text-center color-text">{{$empresa->cargo}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-clone fa-fw fa-3x" aria-hidden="true"></i>&nbsp;ESTA AUTORIZADO:  <div class="text-center color-text">{{$empresa->autorizacion}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-male fa-fw fa-3x" aria-hidden="true"></i>&nbsp;ES SOCIO:  <div class="text-center color-text">{{$empresa->socio}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-lastfm-square fa-fw fa-3x" aria-hidden="true"></i>&nbsp;ES REPRESENTANTE LEGAL:  <div class="text-center color-text">{{$empresa->representante_legal}}</div> </a>
    <a class="list-group-item color-text" href="#"><i class="fa fa-newspaper-o fa-fw fa-3x" aria-hidden="true"></i>&nbsp;TIPO DE EMPRESA:  <div class="text-center color-text">{{$empresa->tipo_empresa}}</div> </a>
    <br>
    <hr>
    <a class="list-group-item color-text" href="#">&nbsp;EMPRESAS PUBLICADAS:  </a>
    <hr>
    
          @endforeach
  </div>
   
     <br>
    <hr>
  

 </div>
</div>
    
  @include('includes.banner')    
</div>

@endsection