@extends('layouts.myapp4')

@section('content')
<div class="container-fluid">
    <div class="row">
        
    
@include('includes.menuIconos')  
  
        
 <div class="home-container">
       
        
  
   @include('includes.menuLateral')  
        
        
   <div class="central">
      @include('includes.menuEmpresaEmpleos')
      <div class="formulario_create_empleo">
          <br><br>
 
     {!!Form::open(['url'=>'/empresas','method'=>'POST','files'=>'true'])!!}
<!--      <form  role="form" method="POST" files="true"  action="{{ url('/empresas') }}">-->
           {{ csrf_field() }}
           
    <div class="alert alert-success" role="alert">
        Datos de la empresa
    </div>
           
     <div class="form-group {{ $errors->has('logo_compañia') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                <label for="cover" class="text-center">Logo compañia</label>  
                                <input id="cover" type="file" class="form-control" name="cover" value="{{ old('cover') }}" required autofocus>
<!--                                 {{Form::file('cover')}}-->
                                @if ($errors->has('cover'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cover') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('informacion_empresa') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                <label for="informacion_empresa" class="text-center">Informacion de empresa</label>  
                                <input id="informacion_empresa" type="text" class="form-control" name="informacion_empresa" value="{{ old('informacion_empresa') }}" required autofocus>

                                @if ($errors->has('informacion_empresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('informacion_empresa') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     <div class="form-group{{ $errors->has('numero_tributario') ? ' has-error' : '' }}">
                            
                            <div class="col-md-9">
                                <label for="numero_tributario" class="text-center">Numero tributario</label> 
                                <input id="numero_tributario" type="number" class="form-control" name="numero_tributario" value="{{ old('numero_tributario') }}" required autofocus>

                                @if ($errors->has('numero_tributario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numero_tributario') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div><!--
     
-->     <div class="form-group{{ $errors->has('sitio_web') ? ' has-error' : '' }}">
                          
                            <div class="col-md-9">
                                 <label for="sitio_web" class="text-center">Sitio web</label>  
                                 <input id="sitio_web" type="url" class="form-control" name="sitio_web" value="{{ old('sitio_web') }}" required autofocus>

                                @if ($errors->has('sitio_web'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sitio_web') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('lema') ? ' has-error' : '' }}">
                          
                            <div class="col-md-9">
                                <label for="lema" class="text-center">Lema</label>  
                                <input id="lema" type="text" class="form-control" name="lema" value="{{ old('lema') }}" required autofocus>

                                @if ($errors->has('lema'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lema') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div><!--
     
-->     <div class="form-group{{ $errors->has('objeto_social') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="objeto_social" class="text-center">Descripcion del objetivo social</label> 
                                
                             <textarea rows="4" cols="50" id="objeto_social" type="text" class="form-control" name="objeto_social" value="{{ old('objeto_social') }}" required autofocus>
                                
                                </textarea>
                                @if ($errors->has('objeto_social'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('objeto_social') }}</strong>
                                    </span>
                                @endif
                            </div>
         </div>


<div class="form-group{{ $errors->has('sector_empresarial') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="sector_empresarial" class="text-center">Sector empresarial</label> 

                                 <select class="form-control" name="sector_empresarial" value="{{ old('sector_empresarial') }}" required autofocus>
                                    <option selected="selected" value="0">Selecciona el sector</option>
                                    <option value="Agricultura / Pesca / Ganadería">Agricultura / Pesca / Ganadería</option>
                                    <option value="Construcción / obras">Construcción / obras</option>
                                    <option value="Educación">Educación</option>
                                    <option value="Energía">Energía</option>
                                    <option value="Entretenimiento / Deportes">Entretenimiento / Deportes</option>
                                    <option value="Fabricación">Fabricación</option>
                                    <option value="Finanzas / Banca">Finanzas / Banca</option>
                                    <option value="Gobierno / No Lucro">Gobierno / No Lucro</option>
                                    <option value="Hostelería / Turismo">Hostelería / Turismo</option>
                                    <option value="Informática / Hardware">Informática / Hardware</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Legal / Asesoría">Legal / Asesoría</option>
                                    <option value="Materias Primas">Materias Primas</option>
                                    <option value="Medios de Comunicación">Medios de Comunicación</option>
                                    <option value="Publicidad / RRPP">Publicidad / RRPP</option>
                                    <option value="RRHH / Personal">RRHH / Personal</option>
                                    <option value="Salud / Medicina">Salud / Medicina</option>
                                    <option value="Servicios Profesionales">Servicios Profesionales</option>
                                    <option value="Telecomunicaciones">Telecomunicaciones</option>
                                    <option value="Transporte">Transporte</option>
                                    <option value="Venta al consumidor">Venta al consumidor</option>
                                    <option value="Venta al por mayor">Venta al por mayor</option>


                                  </select>

                                @if ($errors->has('sector_empresarial'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sector_empresarial') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>



<div class="alert alert-success" role="alert">
        Direccion de la empresa
</div>
     
     <div class="form-group{{ $errors->has('Direccion_postal') ? ' has-error' : '' }}">
                          
                            <div class="col-md-9">
                                 <label for="Direccion_postal" class="text-center">Direccion postal</label>  
                                <input id="Direccion_postal" type="text" class="form-control" name="Direccion_postal" value="{{ old('Direccion_postal') }}" required autofocus>
                                   
                                @if ($errors->has('Direccion_postal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Direccion_postal') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     


    <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                <label for="ciudad2" class="text-center">Ciudad</label>  
                                <input id="ciudad2" type="text" class="form-control" name="ciudad2" value="{{ old('ciudad2') }}" required autofocus>

                                @if ($errors->has('ciudad2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ciudad2') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('estado2') ? ' has-error' : '' }}">
                          
                            <div class="col-md-9">
                                 <label for="estado2" class="text-center">Estado</label>  
                                <input id="estado2" type="text" class="form-control" name="estado2" value="{{ old('estado2') }}" required autofocus>

                                @if ($errors->has('estado2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estado2') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
        <div class="form-group{{ $errors->has('codigo_postal') ? ' has-error' : '' }}">
                         
                            <div class="col-md-9">
                                  <label for="codigo_postal" class="text-center">Codigo postal</label>  
                                <input id="codigo_postal" type="number" class="form-control" name="codigo_postal" value="{{ old('codigo_postal') }}" required autofocus>

                                @if ($errors->has('codigo_postal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigo_postal') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     <div class="form-group{{ $errors->has('pais2') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="pais2" class="text-center">Pais</label> 
<!--                                <input id="pais2" type="text" class="form-control" name="pais2" value="{{ old('pais2') }}" required autofocus>-->
                                 <select class="form-control" name="pais2" value="{{ old('pais2') }}" required autofocus>
                                    <option value="0">Selecciona un país</option>
                                    <option value="Argentina">Argentina</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Chile">Chile</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Costa Rica">Costa Rica</option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="El Salvador">El Salvador</option>
                                    <option value="España">España</option>
                                    <option value="Guatemala">Guatemala</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="México">México</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Panamá">Panamá</option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Perú">Perú</option>
                                    <option value="Puerto Rico">Puerto Rico</option>
                                    <option value="República Dominicana">República Dominicana</option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option selected="Venezuela" value="Venezuela">Venezuela</option>

                                  </select>

                                @if ($errors->has('pais2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais2') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
          <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                             
                            <div class="col-md-9">
                                <label for="telefono" class="text-center">Telefono</label>
                                <input id="telefono" type="number" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

<div class="form-group{{ $errors->has('nombre_contacto') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="nombre_contacto" class="text-center">Nombre de contacto</label> 
                                <input id="nombre_contacto" type="text" class="form-control" name="nombre_contacto" value="{{ old('nombre_contacto') }}" required autofocus>

                                @if ($errors->has('nombre_contacto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre_contacto') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

<div class="form-group{{ $errors->has('cargo') ? ' has-error' : '' }}">
                          
                            <div class="col-md-9">
                                 <label for="cargo" class="text-center">Cual es el cargo?</label>  
                                <input id="cargo" type="text" class="form-control" name="cargo" value="{{ old('cargo') }}" required autofocus>

                                @if ($errors->has('cargo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cargo') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>


    

    <div class="form-group{{ $errors->has('autorizacion') ? ' has-error' : '' }}">
                           
                            <div class="col-md-12">
                                <label for="autorizacion" class="label-radio">Esta autorizado para actuar en nombre de la empresa</label> 
                                <div class="text-center">
                                <label class="radio-inline"><input type="radio" name="autorizacion" value="si" id="autorizacion" required autofocus>Si</label>
                               
                                <label class="radio-inline"><input type="radio" name="autorizacion" value="no" id="autorizacion" required autofocus>No</label>
                                </div>
                                @if ($errors->has('autorizacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('autorizacion') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

<div class="form-group{{ $errors->has('socio') ? ' has-error' : '' }}">
                          
                            <div class="col-md-12">
                                 <label for="socio" class="label-radio">Es socio?</label> 
                                 <div class="text-center">
                                <label class="radio-inline"><input type="radio" name="socio" value="si" id="socio"required autofocus>Si</label>
                               
                                <label class="radio-inline"><input type="radio" name="socio" value="no" id="socio" required autofocus>No</label>
                                </div>
                                @if ($errors->has('socio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('socio') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

<div class="form-group{{ $errors->has('representante_legal') ? ' has-error' : '' }}">
                           
                            <div class="col-md-12">
                                <label for="representante_legal" class="label-radio">Es representante legal?</label> 
                                <div class="text-center">
                                <label class="radio-inline"><input type="radio" name="representante_legal" value="si" id="representante_legal" required autofocus>Si</label>
                               
                                <label class="radio-inline"><input type="radio" name="representante_legal" value="no" id="representante_legal" required autofocus>No</label>
                            </div>
                                @if ($errors->has('socio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('representante_legal') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

<div class="form-group{{ $errors->has('tipo_empresa') ? ' has-error' : '' }}">
                           
                            <div class="col-md-12">
                                <label for="tipo_empresa" class="label-radio">Tipo de empresa</label> 
                                <div class="text-center">
                                <label class="radio-inline"><input type="radio" name="tipo_empresa" value="empleador" id="tipo_empresa" required autofocus>Empleador </label>
                               
                                <label class="radio-inline"><input type="radio" name="tipo_empresa" value="agencia" id="tipo_empresa" required autofocus>Agencia</label>
                                <label class="radio-inline"><input type="radio" name="tipo_empresa" value="temporal" id="tipo_empresa" required autofocus>Servicios </label>
                            </div>
                                @if ($errors->has('tipo_empresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo_empresa') }}</strong>
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
      
      
      
      
      
      
    
  </nav>
     
       
        
        
        
        
        
        </div>
    
</div>
@endsection
