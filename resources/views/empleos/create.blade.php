@extends('layouts.myapp4')

@section('content')
<div class="container-fluid">
    <div class="row">
        
    
@include('includes.menuIconos')  
  
        
 <div class="home-container">
       
        
  
   @include('includes.menuLateral')  
        
        
      <div class="central">
          <a href="{{ url('/empleos',Auth::user()->id) }}" class="btn btn-block btn-info">ia r aver </a>
        
          
          
          
          
<!--     <div class="formulario_create_empleo">
          <br><br>
 
     {!!Form::open(['url'=>'/empleos','method'=>'POST'])!!}
      <form  role="form" method="POST" action="{{ url('/empleos') }}">
           {{ csrf_field() }}
     
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
     
     <div class="form-group{{ $errors->has('zona_horaria') ? ' has-error' : '' }}">
         <label for="zona_horaria" id="label-cedula"class="text-center">Zona horaria</label>  
                           <div class="col-md-9" >
                               
                                <select class="form-control" name="zona_horaria" value="{{ old('zona_horaria') }}" required autofocus>  
                                    <option selected="selected" value="0">Selecciona zona hororaria</option>
                                <option value="(GMT -12:00)&nbsp; &nbsp; Eniwetok, Kwajalein" class="">(GMT -12:00)&nbsp; &nbsp; Eniwetok, Kwajalein</option>
                                <option value="(GMT -11:00)&nbsp; &nbsp; Midway Island, Samoa" class="">(GMT -11:00)&nbsp; &nbsp; Midway Island, Samoa</option>
                                <option value="(GMT -10:00) &nbsp; &nbsp; Hawa" class="">(GMT -10:00) &nbsp; &nbsp; Hawaí</option>
                                <option value="(GMT -9:00) &nbsp; &nbsp; Alaska" class="">(GMT -9:00) &nbsp; &nbsp; Alaska</option>
                                <option value="(GMT -8:00) &nbsp; &nbsp; Horario del Pacífico (US &amp; Canada)" class="">(GMT -8:00) &nbsp; &nbsp; Horario del Pacífico (US &amp; Canada)</option>
                                <option value="(GMT -7:00) &nbsp; &nbsp; Horario de las Montañas (US &amp; Canada)" class="">(GMT -7:00) &nbsp; &nbsp; Horario de las Montañas (US &amp; Canada)</option>
                                <option value="(GMT -6:00) &nbsp; &nbsp; Horario Central (US &amp; Canada), Ciudad de México" class="">(GMT -6:00) &nbsp; &nbsp; Horario Central (US &amp; Canada), Ciudad de México</option>
                                <option value="(GMT -5:00) &nbsp; &nbsp; Horario Oriental (US &amp; Canada), Bogota, Lima" class="">(GMT -5:00) &nbsp; &nbsp; Horario Oriental (US &amp; Canada), Bogota, Lima</option>
                                <option value="(GMT -4:30) Caracas" class="">(GMT -4:30) Caracas</option>
                                <option value="(GMT -4:00) Horario del Atlántico (Canada), La Paz, Santiago" class="">(GMT -4:00) Horario del Atlántico (Canada), La Paz, Santiago</option>
                                <option value="(GMT -3:30) &nbsp; &nbsp; Terranova" class="">(GMT -3:30) &nbsp; &nbsp; Terranova</option>
                                <option value="(GMT -3:00) &nbsp; &nbsp; Brazil, Buenos Aires, Georgetown" class="" >(GMT -3:00) &nbsp; &nbsp; Brazil, Buenos Aires, Georgetown</option>
                                <option value="(GMT -2:00) &nbsp; &nbsp; Atlántico Medio" class="">(GMT -2:00) &nbsp; &nbsp; Atlántico Medio</option>
                                <option value="(GMT -1:00) &nbsp; &nbsp; Azores, Islas de Cabo Verde" class="">(GMT -1:00) &nbsp; &nbsp; Azores, Islas de Cabo Verde</option>
                                <option value="(GMT) &nbsp; &nbsp; Horario de Europa Occidental, Londres, Lisboa, Casablanca, Islas Canarias" class="">(GMT) &nbsp; &nbsp; Horario de Europa Occidental, Londres, Lisboa, Casablanca, Islas Canarias</option>
                                <option value="(GMT +1:00) &nbsp; &nbsp; CET (Europa Central), Bruselas, Madrid, Paris" class="">(GMT +1:00) &nbsp; &nbsp; CET (Europa Central), Bruselas, Madrid, Paris</option>
                                <option value="(GMT +2:00) &nbsp; &nbsp; EET (Europa del Este), Sur África" class="">(GMT +2:00) &nbsp; &nbsp; EET (Europa del Este), Sur África</option>
                                <option value="(GMT +3:00) Moscú, Bagdad, Nairobi" class="">(GMT +3:00) Moscú, Bagdad, Nairobi</option>
                                <option value="(GMT +3:30) &nbsp; &nbsp; Teherá" class="">(GMT +3:30) &nbsp; &nbsp; Teherán</option>
                                <option value="(GMT +4:00)&nbsp; &nbsp; Abu Dhabi, Muscat, Baku, Tbilisi" class="">(GMT +4:00)&nbsp; &nbsp; Abu Dhabi, Muscat, Baku, Tbilisi</option>
                                <option value="4.5" class="">(GMT +4:30)&nbsp; &nbsp; Kabul</option>
                                <option value="(GMT +4:30)&nbsp; &nbsp; Kabul" class="">(GMT +5:00)&nbsp; &nbsp; Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                                <option value="(GMT +5:30) &nbsp; &nbsp; Bombay, Calcuta, Nueva Delhi" class="">(GMT +5:30) &nbsp; &nbsp; Bombay, Calcuta, Nueva Delhi</option>
                                <option value="(GMT +5:45) Kathmandu" class="">(GMT +5:45) Kathmandu</option>
                                <option value="(GMT +6:00)&nbsp; &nbsp; Almaty, Dhaka, Colombo" class="">(GMT +6:00)&nbsp; &nbsp; Almaty, Dhaka, Colombo</option>
                                <option value="(GMT +6:30) Yangón, Isla del Coco" class="">(GMT +6:30) Yangón, Isla del Coco</option>
                                <option value="(GMT +7:00) &nbsp; &nbsp; Bankok, Hanoi, Jakarta" class="">(GMT +7:00) &nbsp; &nbsp; Bankok, Hanoi, Jakarta</option>
                                <option value="(GMT +8:00) &nbsp; &nbsp; Pekín, Perth, Singapur, Hong Kong" class="">(GMT +8:00) &nbsp; &nbsp; Pekín, Perth, Singapur, Hong Kong</option>
                                <option value="(GMT +9:00) &nbsp; &nbsp; Tokio, Seúl, Osaka, Sapporo, Yakutsk" class="">(GMT +9:00) &nbsp; &nbsp; Tokio, Seúl, Osaka, Sapporo, Yakutsk</option>
                                <option value="(GMT +9:30)&nbsp; &nbsp; Adelaide, Darwin" class="">(GMT +9:30)&nbsp; &nbsp; Adelaide, Darwin</option>
                                <option value="(GMT +10:00) &nbsp; &nbsp; Australia Oriental, Guam, Vladivostok" class="">(GMT +10:00) &nbsp; &nbsp; Australia Oriental, Guam, Vladivostok</option>
                                <option value="(GMT +11:00) &nbsp; &nbsp; Magadan, Islas de Salomón, Nueva Caledonia" class="">(GMT +11:00) &nbsp; &nbsp; Magadan, Islas de Salomón, Nueva Caledonia</option>
                                <option value="(GMT +12:00)&nbsp; &nbsp; Auckland, Wellington, Fiji, Kamchatka" class="">(GMT +12:00)&nbsp; &nbsp; Auckland, Wellington, Fiji, Kamchatka</option>
                                </select>

                                @if ($errors->has('zona_horaria'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('zona_horaria') }}</strong>
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
           
           
     <div class="form-group{{ $errors->has('idiomas') ? ' has-error' : '' }}">
         <label for="idiomas" id="label-cedula"class="text-center">Idiomas</label>  
                           <div class="col-md-9" >
                               
                                <select class="form-control" name="idiomas" value="{{ old('idiomas') }}" required autofocus>
                                   <option value="Español">Español</option>
                                    <option value="Inglés">Inglés</option>
                                    <option value="Portugués">Portugués</option>
                                    <option value="Ruso">Ruso</option>
                                    <option value="Árabe">Árabe</option>
                                    <option value="Chino">Chino</option>
                                    <option value="Francés">Francés</option>
                                    <option value="Alemán">Alemán</option>
                                    <option value="Catalán">Catalán</option>
                                    <option value="Chuan">Chuan</option>
                                    <option value="Coreano">Coreano</option>
                                    <option value="Esloveno">Esloveno</option>
                                    <option value="Esloveno">Esloveno</option>
	                            <option value="Japonés">Japonés</option>

 
                                  </select>

                                @if ($errors->has('idiomas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idiomas') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>    
           
    <div class="form-group{{ $errors->has('nivel de idioma') ? ' has-error' : '' }}">
         <label for="nivel de idioma" class="text-center">Nivel de idioma</label>  
                           <div class="col-md-9" >
                               
                                <select class="form-control" name="idioma_nivel" value="{{ old('idioma_nivel') }}" required autofocus>
                                   <option selected="selected" value="0">Seleccione nivel min.</option>
                                    <option value="Muy Básico">Muy Básico</option>
                                    <option value="Básico">Básico</option>
                                    <option value="Intermedio">Intermedio</option>
                                    <option value="Avanzado">Avanzado</option>
                                    <option value="Nativo">Nativo</option>

                                  </select>

                                @if ($errors->has('nivel de idioma'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nivel de idioma') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>     
           
    <div class="form-group{{ $errors->has('nacionalidad') ? ' has-error' : '' }}">
                           <label for="nacionalidad" class="text-center">Nacionalidad</label>  
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
                           <label for="estado_civil" class="text-center">Estado civil</label>  
                            <div class="col-md-9" id="radio-estado-civil">
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
    
    <div class="form-group{{ $errors->has('cedula_ciudadania') ? ' has-error' : '' }}">
         <label for="cedula_ciudadania" id="label-cedula"class="text-center">Cedula o pasaporte</label>  
                           <div class="col-md-9" >
                                <select class="form-control" name="tipo_documento" value="{{ old('tipo_documento') }}"id="documento-cd" required autofocus>
                                    <option selected="selected" value="0">Selecciona Documento</option>
                                     <option value="Cédula de identidad">Cédula de identidad</option>
                                    <option value="Cédula de extranjería">Cédula de extranjería</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    
                                   
                                   
                                  </select>
                               <input id="cedula_ciudadania" type="text" class="form-control" name="cedula_ciudadania" value="{{ old('cedula_ciudadania') }}" required autofocus>
                                @if ($errors->has('cedula_ciudadania'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cedula_ciudadania') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('licencia') ? ' has-error' : '' }}">
                           <label for="licencia" class="text-center">licencia</label>  
                            <div class="col-md-9" id="licencia">
                                
                               <label class="radio-inline"><input type="radio" name="licencia" value="motos" id="licencia">Motos</label>
                               <label class="radio-inline"><input type="radio" name="licencia" value="vehiculos" id="licencia">Vehiculos</label>
                                <label class="radio-inline"><input type="radio" name="licencia" value="camiones" id="licencia">Camiones</label>

                                @if ($errors->has('licencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('licencia') }}</strong>
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
           
    <div class="form-group{{ $errors->has('lugar_nacimiento') ? ' has-error' : '' }}">
                           <label for="lugar_nacimiento" class="text-center">Lugar de nacimiento</label>  
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
                           <label for="pais_residencia" class="text-center">Pais de residencia</label>  
                            <div class="col-md-9">
                               <select class="form-control" name="pais_residencia" value="{{ old('pais_residencia') }}" required autofocus>
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
                                    <option  value="Venezuela">Venezuela</option>
                                     <option  value="otro">Otro</option>

                                  </select>

                                @if ($errors->has('pais_residencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais_residencia') }}</strong>
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
           
    <div class="form-group{{ $errors->has('biografia') ? ' has-error' : '' }}">
                           <label for="biografia" class="text-center">Biografia</label>  
                            <div class="col-md-9">
                                <textarea rows="4" cols="50" id="biografia" type="text" class="form-control" name="biografia" value="{{ old('biografia') }}" required autofocus>
                                
                                </textarea>

                                @if ($errors->has('biografia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('biografia') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
         
    <div class="form-group{{ $errors->has('certificados') ? ' has-error' : '' }}">
                           <label for="certificados" class="text-center">Certificados</label>  
                            <div class="col-md-9" id="licencia">
                              <div class="input-cerficados">
                                   &nbsp; <label class="radio-inline"><input type="radio" name="certificados" value="sin_estudios" id="licencia">Sin estudios</label>
                                    <label class="radio-inline"><input type="radio" name="certificados" value="cursos" id="licencia">Cursos</label>
                                    <label class="radio-inline"><input type="radio" name="certificados" value="primaria" id="licencia">Primaria</label>
                                    <label class="radio-inline"><input type="radio" name="certificados" value="secundaria" id="licencia">Secundaria</label>
                              </div> 
                              <div class="input-cerficados">
                                <label class="radio-inline"><input type="radio" name="certificados" value="tecnico" id="licencia">Tecnico</label>
                                <label class="radio-inline"><input type="radio" name="certificados" value="diplomado" id="licencia">Diplomado</label>
                                <label class="radio-inline"><input type="radio" name="certificados" value="pregrado" id="licencia">Pregrados</label>
                              </div>
                                
                             <div class="input-cerficados">
                                <label class="radio-inline"><input type="radio" name="certificados" value="especializacion" id="licencia">Especializacion</label>
                                <label class="radio-inline"><input type="radio" name="certificados" value="master" id="licencia">Master</label>
                                <label class="radio-inline"><input type="radio" name="certificados" value="doctorado" id="licencia">Doctorado</label>
                              </div>

                                @if ($errors->has('certificados'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('certificados') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>     
           
    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
         <label for="telefono" id="label-cedula"class="text-center">Telefono</label>  
                           <div class="col-md-9" >
                                <select class="form-control" name="codigo_telefono" value="{{ old('codigo_telefono') }}"id="documento-cd" required autofocus>
                                    <option selected="selected" value="0">Selecciona codigo</option>
                                     <option value="VE (+58)"> VE (+58)</option>
                                    <option value="AR (+54)"> AR (+54)</option>
                                    <option value="BO (+591)"> BO (+591)</option>
                                    <option value=" CL (+56)"> CL (+56)</option>
                                    <option value="CO (+57)">CO (+57)</option>
                                    <option value=" CR (+506)"> CR (+506)</option>
                                    <option value="CU (+53)">CU (+53)</option>
                                    <option value="EC (+593)">EC (+593)</option>
                                     <option value=" SV (+503)"> SV (+503)</option>
                                    <option value=" ES (+34)"> ES (+34)</option>
                                    <option value="GT (+502)">  GT (+502)</option>
                                    <option value="HN (+504)">HN (+504)</option>
                                    <option value=" MX (+52)"> MX (+52)</option>
                                    <option value="MX (+52)">MX (+52)</option>
                                     <option value="NI (+505)">NI (+505)</option>
                                    <option value=" PA (+507)"> PA (+507)</option>
                                    <option value="PY (+595)">PY (+595)</option>
                                    <option value="PE (+51)">PE (+51)</option>
                                    <option value="PR (+1787)"> PR (+1787)</option>
                                    <option value="PR (+1787)"> PR (+1787)</option>
                                     <option value="DO (+1849)">DO (+1849)</option>
                                    <option value="UY (+598)">UY (+598)</option>
                                    <option value="AF (+93)"> AF (+93)</option>
                                    <option value="  AL (+355)">  AL (+355)</option>
                                    <option value=" DE (+49)"> DE (+49)</option>
                                    <option value="AD (+376)">AD (+376)</option>
                                     <option value=" AO (+244)"> AO (+244)</option>
                                    <option value=" AI (+1264)"> AI (+1264)</option>
                                    <option value=" AQ (+672)"> AQ (+672)</option>
                                    <option value=" AG (+1268)"> AG (+1268)</option>
                                    <option value=" SA (+966)"> SA (+966)</option>
                                    <option value="DZ (+213)">DZ (+213)</option>
                                    <option value="AM (+374)">AM (+374)</option>
                                    <option value=" AW (+297)"> AW (+297)</option>
                                    <option value=" AU (+61)"> AU (+61)</option>
                                    <option value=" AT (+43)"> AT (+43)</option>
                                    <option value=" AZ (+994)"> AZ (+994)</option>
                                    <option value="BS (+1242)">BS (+1242)</option>
                                    <option value="BD (+880)">BD (+880)</option>
                                    <option value="BB (+1246)">BB (+1246)</option>
                                    <option value=" BH (+973)"> BH (+973)</option>
                                    <option value="BE (+32)">BE (+32)</option>
                                    <option value=" BZ (+501)"> BZ (+501)</option>
                                    <option value=" BJ (+229)"> BJ (+229)</option>
                                    <option value="BM (+1441)">BM (+1441)</option>
                                    <option value=" BY (+375)"> BY (+375)</option>
                                    <option value=" BQ (+5997)"> BQ (+5997)</option>
                                    <option value=" BA (+387)"> BA (+387)</option>
                                    <option value=" BW (+267)"> BW (+267)</option>
                                    <option value="BR (+55)">BR (+55)</option>
                                    <option value="BN (+673)">BN (+673)</option>
                                    <option value=" BG (+359)"> BG (+359)</option>
                                    <option value=" CA (+1)"> CA (+1)</option>
                                    <option value="US (+1)">US (+1)</option>
                                     
                                    
                                   
                                   
</select>
                               <input id="telefono" type="number" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>
                                @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
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
     
      
     
 
  
     <p>
 <center><button type="submit" class="btn btn-primary btn-lg">Registrar</button></center>
 </p>
     {!!Form::close()!!} 
      </div>-->
   
</div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>
@endsection


                  
                  
                
        
                 
               
             
               
             
             
             
              
              
