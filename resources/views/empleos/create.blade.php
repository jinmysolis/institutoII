@extends('layouts.myapp4')

@section('content')
<div class="container-fluid">
    <div class="row">
        
    
@include('includes.menuIconos')  
  
        
 <div class="home-container">
       
        
  
   @include('includes.menuLateral')  
        
        
      <div class="central">
          
     <div class="formulario_create_empleo">
          <br><br>
 
     {!!Form::open(['url'=>'/empleos','method'=>'POST'])!!}
      <form  role="form" method="POST" action="{{ url('/empleos') }}">
           {{ csrf_field() }}
     <div class="form-group{{ $errors->has('primer_nombre') ? ' has-error' : '' }}">
                           <label for="primer_nombre" class="text-center">Primer nombre</label>  
                            <div class="col-md-9">
                                <input id="primer_nombre" type="text" class="form-control" name="primer_nombre" value="{{ old('primer_nombre') }}" required autofocus>

                                @if ($errors->has('primer_nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primer_nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('segundo_nombre') ? ' has-error' : '' }}">
                           <label for="segundo_nombre" class="text-center">Segundo nombre</label>  
                            <div class="col-md-9">
                                <input id="segundo_nombre" type="text" class="form-control" name="segundo_nombre" value="{{ old('segundo_nombre') }}" required autofocus>

                                @if ($errors->has('segundo_nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('segundo_nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                           <label for="apellidos" class="text-center">Apellidos</label>  
                            <div class="col-md-9">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <label for="email" class="text-center">email</label>  
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('cargo_que_busca') ? ' has-error' : '' }}">
                           <label for="cargo_que_busca" class="text-center">Cargo que busca</label>  
                            <div class="col-md-9">
                                <input id="cargo_que_busca" type="text" class="form-control" name="cargo_que_busca" value="{{ old('cargo_que_busca') }}" required autofocus>

                                @if ($errors->has('cargo_que_busca'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cargo_que_busca') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('salario_minimo') ? ' has-error' : '' }}">
                           <label for="salario_minimo" class="text-center">Salario minimo</label>  
                            <div class="col-md-9">
                                <input id="salario_minimo" type="number" class="form-control" name="salario_minimo" value="{{ old('salario_minimo') }}" required autofocus>

                                @if ($errors->has('salario_minimo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salario_minimo') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                           <label for="fecha_nacimiento" class="text-center">Fecha nacimiento</label>  
                            <div class="col-md-9">
                                <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>
                                   
                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('cedula_pasaporte') ? ' has-error' : '' }}">
         <label for="cedula_pasaporte" id="label-cedula"class="text-center">Cedula o pasaporte</label>  
                           <div class="col-md-9" id="cedula">
                                <input id="prefijo_cedula" type="text" class="form-control" name="prefijo_cedula" value="{{ old('prefijo_cedula') }}" required autofocus>
                                <input id="cedula_pasaporte" type="text" class="form-control text-right" name="cedula_pasaporte" value="{{ old('cedula_pasaporte') }}" required autofocus>
                                @if ($errors->has('cedula_pasaporte'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula_pasaporte') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('rif_nit_iss') ? ' has-error' : '' }}">
                           <label for="rif_nit_iss" class="text-center">Rif, Nit, ISS</label>  
                            <div class="col-md-9">
                                <input id="rif_nit_iss" type="number" class="form-control" name="rif_nit_iss" value="{{ old('rif_nit_iss') }}" required autofocus>

                                @if ($errors->has('rif_nit_iss'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rif_nit_iss') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('telefono_residencia') ? ' has-error' : '' }}">
                           <label for="telefono_residencia" class="text-center">Telf residencia</label>  
                            <div class="col-md-9">
                                <input id="telefono_residencia" type="number" class="form-control" name="telefono_residencia" value="{{ old('telefono_residencia') }}" required autofocus>

                                @if ($errors->has('telefono_residencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono_residencia') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('telefono_movil') ? ' has-error' : '' }}">
                           <label for="telefono_movil" class="text-center">Telefono movil</label>  
                           <div class="col-md-9" id="movil">
                                <input id="prefijo_movil" type="text" class="form-control" name="prefijo_movil" value="{{ old('prefijo_movil') }}" required autofocus>
                                <input id="telefono_movil" type="number" class="form-control" name="telefono_movil" value="{{ old('telefono_movil') }}" required autofocus>

                                @if ($errors->has('telefono_movil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono_movil') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('telefono_oficina') ? ' has-error' : '' }}">
                           <label for="telefono_oficina" class="text-center">Telefono oficina</label>  
                           <div class="col-md-9" id="oficina">
                                 <input id="prefijo_oficina" type="text" class="form-control" name="prefijo_oficina" value="{{ old('prefijo_oficina') }}" required autofocus>
                                <input id="telefono_oficina" type="number" class="form-control" name="telefono_oficina" value="{{ old('telefono_oficina') }}" required autofocus>

                                @if ($errors->has('telefono_oficina'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono_oficina') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                           <label for="pais" class="text-center">Pais</label>  
                            <div class="col-md-9">
                                <input id="pais" type="text" class="form-control" name="pais" value="{{ old('pais') }}" required autofocus>

                                @if ($errors->has('pais'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                           <label for="estado" class="text-center">Estado</label>  
                            <div class="col-md-9">
                                <input id="estado" type="text" class="form-control" name="estado" value="{{ old('estado') }}" required autofocus>

                                @if ($errors->has('estado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                           <label for="ciudad" class="text-center">Ciudad</label>  
                            <div class="col-md-9">
                                <input id="ciudad" type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}" required autofocus>

                                @if ($errors->has('ciudad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ciudad') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">
                           <label for="estado_civil" class="text-center">Estado civil</label>  
                            <div class="col-md-9">
                                <label class="radio-inline"><input type="radio" name="estado_civil" value="casado" id="estado_civil">Casado</label>
                                <label class="radio-inline"><input type="radio" name="estado_civil" value="viudo" id="estado_civil">Viudo</label>
              
                                <label class="radio-inline"><input type="radio" name="estado_civil" value="soltero" id="estado_civil">Soltero</label>
                                <label class="radio-inline"><input type="radio" name="estado_civil" value="separado" id="estado_civil">Separado</label>

                                @if ($errors->has('estado_civil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado_civil') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

<div id=""class="text-center">
                                     
                            <label class="radio-inline"><input type="radio" name="genero" value="hombre" id="genero">Hombre</label>
                            <label class="radio-inline"><input type="radio" name="genero" value="mujer" id="genero">mujer</label>
                            
                            </div>
     
     <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
                           <label for="genero" class="text-center">Genero</label>  
                            <div class="col-md-9">
                                <label class="radio-inline"><input type="radio" name="genero" value="hombre" id="genero">Hombre</label>
                               
                                <label class="radio-inline"><input type="radio" name="genero" value="mujer" id="genero">Mujer</label>

                                @if ($errors->has('genero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('genero') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
      <div class="form-group{{ $errors->has('profesion') ? ' has-error' : '' }}">
                           <label for="profesion" class="text-center">Titulo profesional</label>  
                            <div class="col-md-9">
                                <input id="profesion" type="text" class="form-control" name="profesion" value="{{ old('profesion') }}" required autofocus>

                                @if ($errors->has('profesion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profesion') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
    
  
    
  
   
  
     <p>
 <center><button type="submit" class="btn btn-primary btn-lg">Registrar</button></center>
 </p>
     {!!Form::close()!!} 
      </div>
   
</div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>
@endsection
