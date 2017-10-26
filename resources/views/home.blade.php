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
          <div class="alert alert-success" role="alert">
             Bienvenidos a la section personal 
          </div> 
   
     </div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>
@endsection
