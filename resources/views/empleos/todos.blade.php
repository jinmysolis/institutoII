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

          
        @foreach($empleos as $empleo)
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="img/profesional.jpg" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title text-uppercase text-center">Titulo:  {{$empleo->profesion}}</h4>
              <p class="card-text text-uppercase text-center">Descripcion: {{$empleo->biografia}}</p>
              <p class="card-text text-uppercase text-center">id: {{$empleo->id}}</p>
              <p class="card-text text-uppercase text-center">id_user: {{$empleo->user_id}}</p>
              <div class="text-center">
              <a href="{{ url('/show2',$empleo->user_id) }}" class="btn btn-primary ">leer mas</a>
              </div>
            </div>
          </div>
        
        
        @endforeach
       
       
          
        </div> 
       
       @include('includes.banner')     
    
</div>
@endsection