@extends('layouts.myapp4')

@section('content')
<div class="container-fluid">
    <div class="row">
        
    
@include('includes.menuIconos')  
  
        
 <div class="home-container">
       
        
  
   @include('includes.menuLateral')  
        Biembenidods ala section job
        
      <div class="central">
          
     {!!Form::open(['url'=>'/empleos','method'=>'POST'])!!}
     
     <div class="form-group{{ $errors->has('usuario') ? ' has-error' : '' }}">
                           <label for="usuario">Usuario</label>  
                            <div class="col-md-9">
                                <input id="usuario" type="text" class="form-control" name="usuario" value="{{ old('usuario') }}" required autofocus>

                                @if ($errors->has('usuario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('zona_horaria') ? ' has-error' : '' }}">
                           <label for="zona_horaria">Zona horaria</label>  
                            <div class="col-md-9">
                                <input id="zona_horaria" type="text" class="form-control" name="zona_horaria" value="{{ old('zona_horaria') }}" required autofocus>

                                @if ($errors->has('zona_horaria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zona_horaria') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('primer_nombre') ? ' has-error' : '' }}">
                           <label for="primer_nombre">Primer nombre</label>  
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
                           <label for="segundo_nombre">Segundo nombre</label>  
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
                           <label for="apellidos" >Apellidos completos</label>  
                            <div class="col-md-9">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
<!--     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                           <label for="email" >email</label>  
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>-->
    
     
     <div class="form-group{{ $errors->has('profesion') ? ' has-error' : '' }}">
                           <label for="profesion" >Profesion</label>  
                            <div class="col-md-9">
                                <input id="profesion" type="text" class="form-control" name="profesion" value="{{ old('profesion') }}" required autofocus>

                                @if ($errors->has('profesion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profesion') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('idioma') ? ' has-error' : '' }}">
                           <label for="idioma" >Idioma</label>  
                            <div class="col-md-9">
                                <input id="idioma" type="text" class="form-control" name="idioma" value="{{ old('idioma') }}" required autofocus>

                                @if ($errors->has('idioma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idioma') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
<!--     <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                           <label for="fecha_nacimiento" >Fecha nacimiento</label>  
                            <div class="col-md-9">
                                <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>
                                   
                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>-->
     
     
     
     <div class="form-group{{ $errors->has('nacionalidad') ? ' has-error' : '' }}">
                           <label for="nacionalidad" >Nacionalidad</label>  
                            <div class="col-md-9">
                                <input id="nacionalidad" type="text" class="form-control" name="nacionalidad" value="{{ old('nacionalidad') }}" required autofocus>

                                @if ($errors->has('nacionalidad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nacionalidad') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
<div class="form-group{{ $errors->has('estado_civil') ? ' has-error' : '' }}">
                           <label for="estado_civil" >Estado civil</label>  
                           <div class="col-md-9" id="estado-civil-radio">
                                <label class="radio-inline"><input type="radio" name="estado_civil" value="casado" id="estado_civil">Casado</label>
                                <label class="radio-inline"><input type="radio" name="estado_civil" value="union" id="estado_civil">Soltero</label>
              
                                <label class="radio-inline"><input type="radio" name="estado_civil" value="viudo" id="estado_civil">Viudo</label>
                                <label class="radio-inline"><input type="radio" name="estado_civil" value="separado" id="estado_civil">Separado</label>

                                @if ($errors->has('estado_civil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado_civil') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

     <div class="form-group{{ $errors->has('a_que_te_dedicas') ? ' has-error' : '' }}" id="a_que_te_dedicas-grupo">
                           <label for="a_que_te_dedicas" >A que te dedicas?</label>  
                            <div class="col-md-9">
                                <textarea id="a_que_te_dedicas" name="a_que_te_dedicas" rows="10" cols="60"value="{{ old('a_que_te_dedicas') }}" required autofocus></textarea>
                                

                                @if ($errors->has('a_que_te_dedicas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('a_que_te_dedicas') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     
     
     
     <div class="form-group{{ $errors->has('cedula_ciudadania') ? ' has-error' : '' }}">
                           <label for="cedula_ciudadania" >Cedula ciudadania</label>  
                            <div class="col-md-9">
                                <input id="cedula_ciudadania" type="text" class="form-control" name="cedula_ciudadania" value="{{ old('cedula_ciudadania') }}" required autofocus>

                                @if ($errors->has('cedula_ciudadania'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula_ciudadania') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('licencia_conducir') ? ' has-error' : '' }}">
                           <label for="licencia_conducir" >Licencia conducir</label>  
                            <div class="col-md-9">
                                <input id="licencia_conducir" type="text" class="form-control" name="licencia_conducir" value="{{ old('licencia_conducir') }}" required autofocus>

                                @if ($errors->has('licencia_conducir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('licencia_conducir') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     <div class="form-group{{ $errors->has('pasaporte') ? ' has-error' : '' }}">
                           <label for="pasaporte" >Pasaporte</label>  
                            <div class="col-md-9">
                                <input id="pasaporte" type="text" class="form-control" name="pasaporte" value="{{ old('pasaporte') }}" required autofocus>

                                @if ($errors->has('pasaporte'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pasaporte') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
    
     
      <div class="form-group{{ $errors->has('seguro_social') ? ' has-error' : '' }}">
                           <label for="seguro_social" >Seguro social</label>  
                            <div class="col-md-9">
                                <input id="seguro_social" type="text" class="form-control" name="seguro_social" value="{{ old('seguro_social') }}" required autofocus>

                                @if ($errors->has('seguro_social'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('seguro_social') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>


     <div class="form-group{{ $errors->has('fecha_nacimiento') ? ' has-error' : '' }}">
                           <label for="fecha_nacimiento" >Fecha de nacimiento</label>  
                            <div class="col-md-9">
                                <input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}" required autofocus>

                                @if ($errors->has('fecha_nacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
    
<div class="form-group{{ $errors->has('lugar_nacimiento') ? ' has-error' : '' }}">
                           <label for="lugar_nacimiento" >Lugar de nacimiento</label>  
                            <div class="col-md-9">
                                <input id="lugar_nacimiento" type="text" class="form-control" name="lugar_nacimiento" value="{{ old('lugar_nacimiento') }}" required autofocus>

                                @if ($errors->has('lugar_nacimiento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lugar_nacimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

  
    
  <div class="form-group{{ $errors->has('pais_residencia') ? ' has-error' : '' }}">
                           <label for="pais_residencia" >Pais de residencia</label>  
                            <div class="col-md-9">
                                <input id="pais_residencia" type="text" class="form-control" name="pais_residencia" value="{{ old('pais_residencia') }}" required autofocus>

                                @if ($errors->has('pais_residencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais_residencia') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
 
   <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                           <label for="ciudad" >Ciudad</label>  
                            <div class="col-md-9">
                                <input id="ciudad" type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}" required autofocus>

                                @if ($errors->has('ciudad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ciudad') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
   
  <div class="form-group{{ $errors->has('biografia') ? ' has-error' : '' }}">
                           <label for="biografia" >Biografia</label>  
                            <div class="col-md-9">
                                <input id="biografia" type="text" class="form-control" name="biografia" value="{{ old('biografia') }}" required autofocus>

                                @if ($errors->has('biografia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('biografia') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

<div class="form-group{{ $errors->has('certificados') ? ' has-error' : '' }}">
                           <label for="certificados" >Certificados de estudios</label>  
                           <div class="col-md-9" id="certificados-grup">
                               
                               <div class="r-g">
                                    <label class="radio"><input type="radio" name="certificados" value="sin_estudios" id="estado_civil">Sin estudios</label>
                                    <label class="radio"><input type="radio" name="certificados" value="cursos" id="estado_civil">Cursos</label>
                                    <label class="radio"><input type="radio" name="certificados" value="primaria" id="estado_civil">Primaria</label>
                                    <label class="radio"><input type="radio" name="certificados" value="secundaria" id="estado_civil">Secundaria</label>
                                </div>
                                <div class="r-g">
                                    <label class="radio"><input type="radio" name="certificados" value="tecnico" id="estado_civil">Tecnico</label>
                                    <label class="radio"><input type="radio" name="certificados" value="diplomado" id="estado_civil">Diplomado</label>
                                    <label class="radio"><input type="radio" name="certificados" value="pregrado" id="estado_civil">Pregrado</label>
                                 </div>
                                <div class="r-g">
                                    <label class="radio"><input type="radio" name="certificados" value="especializacion" id="estado_civil">Especializacion</label>
                                    <label class="radio"><input type="radio" name="certificados" value="master" id="estado_civil">Master</label>
                                    <label class="radio"><input type="radio" name="certificados" value="doctorado" id="estado_civil">Doctorado</label>
                                 </div>
                               

                                @if ($errors->has('certificados'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('certificados') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
<h2>Persona de contacto en emergencia</h2>
<div class="n-t-emergencia">
<div class="form-group{{ $errors->has('nombre_emergencia') ? ' has-error' : '' }}">
                           <label for="nombre_emergencia" >Nombre</label>  
                            <div class="col-md-9">
                                <input id="nombre_emergencia" type="text" class="form-control" name="nombre_emergencia" value="{{ old('nombre_emergencia') }}" required autofocus>

                                @if ($errors->has('nombre_emergencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre_emergencia') }}</strong>
                                    </span>
                                @endif
                            </div>
 </div>

<div class="form-group{{ $errors->has('telefono_movil_emergencia') ? ' has-error' : '' }}">
                           <label for="telefono_movil_emergencia" >Telefono</label>  
                            <div class="col-md-9 pf-telefono">
                                <input id="prefijo_movil_emergencia" type="text" class="form-control" name="prefijo_movil_emergencia" value="{{ old('prefijo_movil_emergencia') }}" required autofocus>
                                <input id="telefono_movil_emergencia" type="text" class="form-control" name="telefono_movil_emergencia" value="{{ old('telefono_movil_emergencia') }}" required autofocus>

                                @if ($errors->has('telefono_movil_emergencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono_movil_emergencia') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
</div> 

<div class="n-t-emergencia">
<div class="form-group{{ $errors->has('ciudad_emergencia') ? ' has-error' : '' }}">
                           <label for="ciudad_emergencia" >Ciudad</label>  
                            <div class="col-md-9">
                                <input id="ciudad_emergencia" type="text" class="form-control" name="ciudad_emergencia" value="{{ old('ciudad_emergencia') }}" required autofocus>

                                @if ($errors->has('ciudad_emergencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ciudad_emergencia') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

<div class="form-group{{ $errors->has('email_emergencia') ? ' has-error' : '' }}">
                           <label for="email_emergencia" >Email</label>  
                            <div class="col-md-9">
                                <input id="email_emergencia" type="text" class="form-control" name="email_emergencia" value="{{ old('email_emergencia') }}" required autofocus>

                                @if ($errors->has('email_emergencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_emergencia') }}</strong>
                                    </span>
                                @endif
                            </div>
 </div>
</div>
<h2>Direccion alummno</h2>
<div class="form-group{{ $errors->has('direccion_postal_alumno') ? ' has-error' : '' }}">
                           <label for="direccion_postal_alumno" >Direccion postal</label>  
                            <div class="col-md-9">
                                <input id="direccion_postal_alumno" type="text" class="form-control" name="direccion_postal_alumno" value="{{ old('direccion_postal_alumno') }}" required autofocus>

                                @if ($errors->has('direccion_postal_alumno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion_postal_alumno') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>


<div class="form-group{{ $errors->has('ciudad_alumno') ? ' has-error' : '' }}">
                           <label for="ciudad_alumno" >Ciudad</label>  
                            <div class="col-md-9">
                                <input id="ciudad_alumno" type="text" class="form-control" name="ciudad_alumno" value="{{ old('ciudad_alumno') }}" required autofocus>

                                @if ($errors->has('ciudad_alumno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ciudad_alumno') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>


<div class="form-group{{ $errors->has('direccion_postal_alumno') ? ' has-error' : '' }}">
                           <label for="direccion_postal_alumno" >Direccion postal</label>  
                            <div class="col-md-9">
                                <input id="direccion_postal_alumno" type="text" class="form-control" name="direccion_postal_alumno" value="{{ old('direccion_postal_alumno') }}" required autofocus>

                                @if ($errors->has('direccion_postal_alumno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion_postal_alumno') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
<div class="form-group{{ $errors->has('codigo_postal_alumno') ? ' has-error' : '' }}">
                           <label for="codigo_postal_alumno" >Codigo postal/ZIP</label>  
                            <div class="col-md-9">
                                <input id="codigo_postal_alumno" type="text" class="form-control" name="codigo_postal_alumno" value="{{ old('codigo_postal_alumno') }}" required autofocus>

                                @if ($errors->has('codigo_postal_alumno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigo_postal_alumno') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
<div class="form-group{{ $errors->has('pais_alumno') ? ' has-error' : '' }}">
                           <label for="pais_alumno" >Pais</label>  
                            <div class="col-md-9">
                                <input id="pais_alumno" type="text" class="form-control" name="pais_alumno" value="{{ old('pais_alumno') }}" required autofocus>

                                @if ($errors->has('pais_alumno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais_alumno') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
   
<div class="form-group{{ $errors->has('estado_alumno') ? ' has-error' : '' }}">
                           <label for="estado_alumno" >Estado</label>  
                            <div class="col-md-9">
                                <input id="estado_alumno" type="text" class="form-control" name="estado_alumno" value="{{ old('estado_alumno') }}" required autofocus>

                                @if ($errors->has('estado_alumno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado_alumno') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
<div class="form-group{{ $errors->has('telefono_alumno') ? ' has-error' : '' }}">
                           <label for="telefono_alumno" >Telefono</label>  
                            <div class="col-md-9">
                                <input id="telefono_alumno" type="text" class="form-control" name="telefono_alumno" value="{{ old('telefono_alumno') }}" required autofocus>

                                @if ($errors->has('telefono_alumno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono_alumno') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
<div class="form-group{{ $errors->has('movil_alumno') ? ' has-error' : '' }}">
                           <label for="movil_alumno" >celular</label>  
                            <div class="col-md-9">
                                <input id="movil_alumno" type="text" class="form-control" name="movil_alumno" value="{{ old('movil_alumno') }}" required autofocus>

                                @if ($errors->has('movil_alumno'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('movil_alumno') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
 <h2>Experiencia laboral</h2> 
<div class="form-group{{ $errors->has('nombre_empresa') ? ' has-error' : '' }}">
                           <label for="nombre_empresa" >Nombre empresa</label>  
                            <div class="col-md-9">
                                <input id="nombre_empresa" type="text" class="form-control" name="nombre_empresa" value="{{ old('nombre_empresa') }}" required autofocus>

                                @if ($errors->has('nombre_empresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre_empresa') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
<div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                           <label for="cargo" >Cargo</label>  
                            <div class="col-md-9">
                                <input id="cargo" type="text" class="form-control" name="cargo" value="{{ old('cargo') }}" required autofocus>

                                @if ($errors->has('cargo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cargo') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

<div class="form-group{{ $errors->has('periodo') ? ' has-error' : '' }}">
                           <label for="periodo" >Periodo</label>  
                            <div class="col-md-9">
                                <input id="periodo" type="text" class="form-control" name="periodo" value="{{ old('periodo') }}" required autofocus>

                                @if ($errors->has('periodo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('periodo') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     <p>
 <center><button type="submit" class="btn btn-info btn-lg">Registrar</button></center>
 </p>
     {!!Form::close()!!} 
   
</div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>
@endsection
