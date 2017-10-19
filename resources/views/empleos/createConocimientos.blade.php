@extends('layouts.myapp4')

@section('content')
<div class="container-fluid">
    <div class="row">
        
    
@include('includes.menuIconos')  
  
        
 <div class="home-container">
       
        
  
   @@if (auth()->user()->tipoCuenta === 'personal') 
           @include('includes.menuLateralPersona')  
      @else
        
      @include('includes.menuLateral')  
        
        
    @endif
        
        
      <div class="central">
          
     <div class="formulario_create_empleo">
          <br><br>
          
 @if( session()->has('info'))       
 
     <div class="alert alert-warning" role="alert">
      {{ session('info') }}
     </div>
     
    

     @endif
          
 <div class="alert alert-success" role="alert">
      Otros conocimientos
 </div>
          <p>
            <div class="text-right">
                <button class="btn btn-success ">
                  Total conomientos: <span class="badge badge-secondary">0</span>
                  <span class="sr-only">unread messages</span>
                </button>
          </div>
          </p>
     {!!Form::open(['url'=>'/conocimientos','method'=>'POST'])!!}
      <form  role="form" method="POST" action="{{ url('/conocimientos') }}">
           {{ csrf_field() }}
     
              
             
           
    <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                           <label for="titulo" class="text-center">Titulo</label>  
                            <div class="col-md-9">
                                <input id="titulo" type="text" class="form-control" name="titulo" value="{{ old('titulo') }}" required autofocus>

                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
           

           
           
   <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                           <label for="descripcion" class="text-center">Descripción</label>  
                            <div class="col-md-9">
                                <input id="descripcion" type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}" required autofocus>

                                @if ($errors->has('descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>        
           
           
                
 
           <hr>
           


							                     
									              
							                 
							               
     
 
  
  <p>
  <center><button type="submit" class="btn btn-primary btn-lg">Registrar</button>
      <a href="{{ url('/empleos') }}" class="btn btn-primary btn-lg">seguir</a>
 
 </p>
     {!!Form::close()!!} 
      </div>
   
</div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>
@endsection


                  
                  
                
        
                 
               
             
               
             
             
             
              
              
