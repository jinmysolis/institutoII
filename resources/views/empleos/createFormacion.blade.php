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
          
     <div class="formulario_create_empleo">
          <br><br>
 <div class="alert alert-success" role="alert">
       Formacion primaria
 </div>
     {!!Form::open(['url'=>'/formaciones','method'=>'POST'])!!}
      <form  role="form" method="POST" action="{{ url('/formaciones') }}">
           {{ csrf_field() }}
     
              
             
           
    <div class="form-group{{ $errors->has('centro_educativo_primaria') ? ' has-error' : '' }}">
                           <label for="centro_educativo_primaria" class="text-center">Centro educativo primaria</label>  
                            <div class="col-md-9">
                                <input id="centro_educativo_primaria" type="text" class="form-control" name="centro_educativo_primaria" value="{{ old('centro_educativo_primaria') }}" required autofocus>

                                @if ($errors->has('salario_minimo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('centro_educativo_primaria') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
    <div class="form-group{{ $errors->has('estado_primaria') ? ' has-error' : '' }}">
                           <label for="estado_primaria" class="text-center">Estado</label>  
                            <div class="col-md-9">
                                <label class="radio-inline"><input type="radio" name="estado_primaria" value="cursando" id="estado_primaria">Cursando</label>
                               
                                <label class="radio-inline"><input type="radio" name="estado_primaria" value="completado" id="estado_primaria">Completado</label>

                                @if ($errors->has('estado_primaria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado_primaria') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     
     
     <div class="form-group{{ $errors->has('ano_inicio_primaria') ? ' has-error' : '' }}">
                           <label for="ano_inicio_primaria" class="text-center">Desde</label>  
                            <div class="col-md-9">
                                <input id="ano_inicio_primaria" type="date" class="form-control" name="ano_inicio_primaria" value="{{ old('ano_inicio_primaria') }}" required autofocus>

                                @if ($errors->has('ano_inicio_primaria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_inicio_primaria') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('ano_fin_primaria') ? ' has-error' : '' }}">
                           <label for="ano_fin_primaria" class="text-center">Hasta</label>  
                            <div class="col-md-9">
                                <input id="ano_fin_primaria" type="date" class="form-control" name="ano_fin_primaria" value="{{ old('ano_fin_primaria') }}" required autofocus>

                                @if ($errors->has('ano_fin_primaria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_fin_primaria') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     
           <hr>
           
 <div class="alert alert-success" role="alert">
       Formacion secundaria
 </div>
           
<div class="form-group{{ $errors->has('centro_educativo_secundaria') ? ' has-error' : '' }}">
                           <label for="centro_educativo_secundaria" class="text-center">Centro educativo secundaria</label>  
                            <div class="col-md-9">
                                <input id="centro_educativo_secundaria" type="text" class="form-control" name="centro_educativo_secundaria" value="{{ old('centro_educativo_secundaria') }}" required autofocus>

                                @if ($errors->has('centro_educativo_secundaria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('centro_educativo_secundaria') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
    <div class="form-group{{ $errors->has('estado_secundaria') ? ' has-error' : '' }}">
                           <label for="estado_secundaria" class="text-center">Estado</label>  
                            <div class="col-md-9">
                                <label class="radio-inline"><input type="radio" name="estado_secundaria" value="cursando" id="estado_secundaria">Cursando</label>
                               
                                <label class="radio-inline"><input type="radio" name="estado_secundaria" value="completado" id="estado_secundaria">Completado</label>

                                @if ($errors->has('estado_secundaria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado_secundaria') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     
     
     <div class="form-group{{ $errors->has('ano_inicio_secundaria') ? ' has-error' : '' }}">
                           <label for="ano_inicio_secundaria" class="text-center">Desde</label>  
                            <div class="col-md-9">
                                <input id="ano_inicio_secundaria" type="date" class="form-control" name="ano_inicio_secundaria" value="{{ old('ano_inicio_secundaria') }}" required autofocus>

                                @if ($errors->has('ano_inicio_secundaria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_inicio_secundaria') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('ano_fin_secundaria') ? ' has-error' : '' }}">
                           <label for="ano_fin_secundaria" class="text-center">Hasta</label>  
                            <div class="col-md-9">
                                <input id="ano_fin_secundaria" type="date" class="form-control" name="ano_fin_secundaria" value="{{ old('ano_fin_secundaria') }}" required autofocus>

                                @if ($errors->has('ano_fin_secundaria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_fin_secundaria') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     
           <hr>
           

<div class="alert alert-success" role="alert">
       Formacion universitaria
 </div>
           
<div class="form-group{{ $errors->has('centro_educativo_universidad') ? ' has-error' : '' }}">
                           <label for="centro_educativo_universidad" class="text-center">Centro educativo universidad</label>  
                            <div class="col-md-9">
                                <input id="centro_educativo_universidad" type="text" class="form-control" name="centro_educativo_universidad" value="{{ old('centro_educativo_universidad') }}" required autofocus>

                                @if ($errors->has('centro_educativo_universidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('centro_educativo_universidad') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
    <div class="form-group{{ $errors->has('estado_universidad') ? ' has-error' : '' }}">
                           <label for="estado_universidad" class="text-center">Estado</label>  
                            <div class="col-md-9">
                                <label class="radio-inline"><input type="radio" name="estado_universidad" value="cursando" id="estado_universidad">Cursando</label>
                               
                                <label class="radio-inline"><input type="radio" name="estado_universidad" value="completado" id="estado_universidad">Completado</label>

                                @if ($errors->has('estado_universidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado_universidad') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     
     
     <div class="form-group{{ $errors->has('ano_inicio_universidad') ? ' has-error' : '' }}">
                           <label for="ano_inicio_universidad" class="text-center">Desde</label>  
                            <div class="col-md-9">
                                <input id="ano_inicio_universidad" type="date" class="form-control" name="ano_inicio_universidad" value="{{ old('ano_inicio_universidad') }}" required autofocus>

                                @if ($errors->has('ano_inicio_universidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_inicio_universidad') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('ano_fin_universidad') ? ' has-error' : '' }}">
                           <label for="ano_fin_universidad" class="text-center">Hasta</label>  
                            <div class="col-md-9">
                                <input id="ano_fin_universidad" type="date" class="form-control" name="ano_fin_universidad" value="{{ old('ano_fin_universidad') }}" required autofocus>

                                @if ($errors->has('ano_fin_universidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_fin_universidad') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     
           <hr>
           
           
<div class="alert alert-success" role="alert">
       Formacion posgrado
 </div>
           
<div class="form-group{{ $errors->has('centro_educativo_posgrado') ? ' has-error' : '' }}">
                           <label for="centro_educativo_posgrado" class="text-center">Centro educativo posgrado</label>  
                            <div class="col-md-9">
                                <input id="centro_educativo_posgrado" type="text" class="form-control" name="centro_educativo_posgrado" value="{{ old('centro_educativo_posgrado') }}" required autofocus>

                                @if ($errors->has('centro_educativo_posgrado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('centro_educativo_posgrado') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
    <div class="form-group{{ $errors->has('estado_posgrado') ? ' has-error' : '' }}">
                           <label for="estado_posgrado" class="text-center">Estado</label>  
                            <div class="col-md-9">
                                <label class="radio-inline"><input type="radio" name="estado_posgrado" value="cursando" id="estado_universidad">Cursando</label>
                               
                                <label class="radio-inline"><input type="radio" name="estado_posgrado" value="completado" id="estado_universidad">Completado</label>

                                @if ($errors->has('estado_posgrado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado_posgrado') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     
     
     <div class="form-group{{ $errors->has('ano_inicio_posgrado') ? ' has-error' : '' }}">
                           <label for="ano_inicio_posgrado" class="text-center">Desde</label>  
                            <div class="col-md-9">
                                <input id="ano_inicio_posgrado" type="date" class="form-control" name="ano_inicio_posgrado" value="{{ old('ano_inicio_posgrado') }}" required autofocus>

                                @if ($errors->has('ano_inicio_posgrado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_inicio_posgrado') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('ano_fin_posgrado') ? ' has-error' : '' }}">
                           <label for="ano_fin_posgrado" class="text-center">Hasta</label>  
                            <div class="col-md-9">
                                <input id="ano_fin_posgrado" type="date" class="form-control" name="ano_fin_posgrado" value="{{ old('ano_fin_posgrado') }}" required autofocus>

                                @if ($errors->has('ano_fin_posgrado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_fin_posgrado') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     
           <hr>
           
     
     
      
     
 
  
     <p>
 <center><button type="submit" class="btn btn-primary btn-lg">Registrate</button></center>
 </p>
     {!!Form::close()!!} 
      </div>
   
</div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>
@endsection


                  
                  
                
        
                 
               
             
               
             
             
             
              
              
