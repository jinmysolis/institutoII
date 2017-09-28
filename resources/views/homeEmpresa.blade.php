@extends('layouts.myapp4')

@section('content')
<div class="container-fluid">
    <div class="row">
        
    
@include('includes.menuIconos')  
  
        
 <div class="home-container">
       
       
  
   @include('includes.menuLateral')  
        
        
      <div class="central">
       <div class="alert alert-success" role="alert">
             Bienvemidos a la section empresa
      </div>   
     
   
      </div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>
@endsection
