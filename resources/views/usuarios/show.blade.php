@extends('layouts.myapp4')

@section('content')
@include('includes.menuIconos')  
<!--@include('includes.menuEmpresaEmpleos')  -->
<div class="home-container">
  @include('includes.menuLateral')  
  <div class="central">   
        <div class="alert alert-success " role="alert">
                    Detalles del usuario
         </div> 
      <div class="text-center">
    <button class="btn btn-success">
      Empleos publicados <span class="badge badge-secondary">4</span>
    </button>
    <button class="btn btn-success">
      Empresas registradas <span class="badge badge-secondary">7</span>
    </button>
          
    
</div><br>
         <div class="list-group" id="list-group-showOfertas">
            <a class="list-group-item color-text" href="#"><i class="fa fa-sort-numeric-desc fa-fw fa-3x" aria-hidden="true"></i>&nbsp;ID:  <div class="text-center color-text">{{$usuario->id}}</div> </a>
            <a class="list-group-item color-text" href="#"><i class="fa fa-user-secret fa-fw fa-3x" aria-hidden="true"></i>&nbsp;NOMBRE: <div class="text-center color-text">{{$usuario->name}}</div></a>
             <a class="list-group-item color-text" href="#"><i class="fa fa-minus-square-o fa-fw fa-3x" aria-hidden="true"></i>&nbsp;APELLIDOS <div class="text-center color-text">{{$usuario->apellidos}}</div></a>
            <a class="list-group-item color-text" href="#"><i class="fa fa-envelope-o fa-fw fa-3x" aria-hidden="true"></i>&nbsp; EMAIL <div class="text-center color-text">{{$usuario->email}}</div></a>
            <a class="list-group-item color-text" href="#"><i class="fa fa-bullhorn fa-fw fa-3x" aria-hidden="true"></i>&nbsp; TIPO DE CUENTA <div class="text-center color-text">{{$usuario->tipoCuenta}}</div></a>
            <a class="list-group-item color-text" href="#"><i class="fa fa-history fa-fw fa-3x" aria-hidden="true"></i>&nbsp; FECHA DEL REGISTRO <div class="text-center color-text">{{$usuario->created_at}}</div></a>


        </div>



       
</div> 
   @include('includes.banner')    
</div>           

@endsection