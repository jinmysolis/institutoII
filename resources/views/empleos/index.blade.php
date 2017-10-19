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

          
        
       
       
          
        </div> 
       
       @include('includes.banner')     
    
</div>
@endsection