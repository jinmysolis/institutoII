@extends('layouts.myapp4')

@section('content')
<div class="container-fluid">
    <div class="row">
        
    
@include('includes.menuEmpresaEmpleos')  
  
        
 <div class="home-container">
       
               
        
   <div class="central">
      
      <div class="formulario_create_empleo">
          <br><br>
 
     {!!Form::open(['url'=>'/publicarOferta','method'=>'POST','files'=>'true'])!!}
<!--      <form  role="form" method="POST" files="true"  action="{{ url('/empresas') }}">-->
           {{ csrf_field() }}
           
    <div class="alert alert-success" role="alert">
        Datos de la Oferta
    </div>
           
     
     <div class="form-group{{ $errors->has('titulo_oferta') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                <label for="titulo_oferta" class="text-center">Titulo oferta</label>  
                                <input id="titulo_oferta" type="text" class="form-control" name="titulo_oferta" value="{{ old('titulo_oferta') }}" required autofocus>

                                @if ($errors->has('titulo_oferta'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo_oferta') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
    <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="area" class="text-center">Area</label> 

                                 <select class="form-control" name="area" value="{{ old('area') }}" required autofocus>
                                    <option selected="selected" value="0">Selecciona el sector</option>
                                    <option value="Agricultura / Pesca / Ganaderí">Agricultura / Pesca / Ganadería</option>
                                    <option value="Construcción / obras">Construcción / obras</option>
                                    <option value="Educación">Educación</option>
                                    <option value="Energía">Energía</option>
                                    <option value="Entretenimiento / Deportes">Entretenimiento / Deportes</option>
                                    <option value="Fabricación">Fabricación</option>
                                    <option value="Finanzas / Banca">Finanzas / Banca</option>
                                    <option value="Gobierno / No Lucro">Gobierno / No Lucro</option>
                                    <option value="Hostelería / Turismo">Hostelería / Turismo</option>
                                    <option value="Informática / Hardware">Informática / Hardware</option>
                                    <option value="Informática / Software">Informática / Software</option>
                                    <option value="Internet">Internet</option>
                                    <option value="Legal / Asesoría">Legal / Asesoría</option>
                                    <option value="Materias Primas">Materias Primas</option>
                                    <option value="Medios de Comunicación">Medios de Comunicación</option>
                                    <option value="Publicidad / RRPP">Publicidad / RRPP</option>
                                    <option value="19">RRHH / Personal</option>
                                    <option value="RRHH / Personal">Salud / Medicina</option>
                                    <option value="Servicios Profesionales">Servicios Profesionales</option>
                                    <option value="Telecomunicaciones">Telecomunicaciones</option>
                                    <option value="Transporte">Transporte</option>
                                    <option value="Venta al consumidor">Venta al consumidor</option>
                                    <option value="Venta al por mayor">Venta al por mayor</option>


                                  </select>

                                @if ($errors->has('area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
    <div class="form-group{{ $errors->has('tipo_jornada') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="tipo_jornada" class="text-center">Tipo de jornada</label> 

                                 <select class="form-control" name="tipo_jornada" value="{{ old('tipo_jornada') }}" required autofocus>
                                    <option selected="selected" value="0">Selecciona jornada</option>
                                     <option value="Presencial">Presencial</option>
                                    <option value="Jornada completa">Jornada completa</option>
                                    <option value="Medio tiempo">Medio tiempo</option>
                                    <option value="Nocturno">Nocturno</option>
                                    <option value="Fines de semana">Fines de semana</option>
                                     <option value="Por horas">Por horas</option>
                                    <option value="Desde casa">Desde casa</option>
                                   
                                  </select>

                                @if ($errors->has('tipo_jornada'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo_jornada') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('tipo_contrato') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="tipo_contrato" class="text-center">Tipo de contrato</label> 

                                 <select class="form-control" name="tipo_contrato" value="{{ old('tipo_contrato') }}" required autofocus>
                                    <option selected="selected" value="0">Selecciona</option>
                                    <option value="Contrato de Aprendizaje">Contrato de Aprendizaje</option>
                                    <option value="Contrato de obra o labor">Contrato de obra o labor</option>
                                    <option value="Contrato por tiempo determinado">Contrato por tiempo determinado</option>
                                    <option value="Contrato por tiempo indefinido">Contrato por tiempo indefinido</option>
                                    <option value="Otro tipo de contrato">Otro tipo de contrato</option>

                                   
                                  </select>

                                @if ($errors->has('tipo_contrato'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tipo_contrato') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
           <div class="form-group{{ $errors->has('tareas') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="tareas" class="text-center">Descripcion de las tareas</label> 
                                
                             <textarea rows="4" cols="50" id="tareas" type="text" class="form-control" name="tareas" value="{{ old('tareas') }}" required autofocus>
                                
                                </textarea>
                                @if ($errors->has('tareas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tareas') }}</strong>
                                    </span>
                                @endif
                            </div>
        </div>
     
     
     <div class="form-group{{ $errors->has('salario') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                <label for="salario" class="text-center">Salario (Neto mensual)</label>  
                                <input id="salario" type="number" class="form-control" name="salario" value="{{ old('salario') }}" required autofocus>

                                @if ($errors->has('salario'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salario') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>

     
  
     
        






<div class="alert alert-success" role="alert">
        Lugar de trabajo
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
                                    <option selected="selected" value="Venezuela">Venezuela</option>

                                  </select>

                                @if ($errors->has('pais2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais2') }}</strong>
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
     
        
    <div class="alert alert-success" role="alert">
        Requisitos para el cargo
    </div>
           
    <div class="form-group{{ $errors->has('anos_experiencia') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="anos_experiencia" class="text-center">Años de experiencia</label> 

                                 <select class="form-control" name="anos_experiencia" value="{{ old('anos_experiencia') }}" required autofocus>
                                    <option value="0">Sin experiencia</option>
                                    <option value="-1">Menos de 1 año</option>
                                    <option value="1">1 año</option>
                                    <option value="2">2 años</option>
                                    <option value="3">3 años</option>
                                    <option value="4">4 años</option>
                                    <option value="5">5 años</option>
                                    <option value="6">6 años</option>
                                    <option value="7">7 años</option>
                                    <option value="8">8 años</option>
                                    <option value="9">9 años</option>
                                    <option value="10">10 años</option>
                                    <option value="11">11 años</option>
                                    <option value="12">12 años</option>
                                    <option value="13">13 años</option>
                                    <option value="14">14 años</option>
                                    <option value="15">15 años</option>


                                   
                                  </select>

                                @if ($errors->has('anos_experiencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('anos_experiencia') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
    <div class="form-group{{ $errors->has('edad_minima') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="edad_minima" class="text-center">Edad minima</label> 

                                 <select class="form-control" name="edad_minima" value="{{ old('edad_minima') }}" required autofocus>
                                    <option value="Edad mínima">Edad mínima</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>



                                   
                                  </select>

                                @if ($errors->has('edad_minima'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad_minima') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
           
    <div class="form-group{{ $errors->has('edad_maxima') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="edad_maxima" class="text-center">Edad maxima</label> 

                                 <select class="form-control" name="edad_maxima" value="{{ old('edad_maxima') }}" required autofocus>
                                    <option value="Edad máxima">Edad máxima</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>



                                   
                                  </select>

                                @if ($errors->has('edad_maxima'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('edad_maxima') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('estudios_minimos') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="estudios_minimos" class="text-center">Estudios minimos</label> 

                                 <select class="form-control" name="estudios_minimos" value="{{ old('estudios_minimos') }}" required autofocus>
                                   <option selected="selected" value="0">Selecciona</option>
                                    <option value="Educación Básica Primaria">Educación Básica Primaria</option>
                                    <option value="Educación Básica Secundaria">Educación Básica Secundaria</option>
                                    <option value="Bachillerato / Educación Media">Bachillerato / Educación Media</option>
                                    <option value="Educación Técnico/Profesional">Educación Técnico/Profesional</option>
                                    <option value="Universidad">Universidad</option>
                                    <option value="Postgrado">Postgrado</option>   
                                  </select>

                                @if ($errors->has('estudios_minimos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estudios_minimos') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('idiomas') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="idiomas" class="text-center">Idiomas</label> 

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
           
           
    
           
    <div class="form-group{{ $errors->has('idioma_nivel') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="idioma_nivel" class="text-center">Idioma nivel</label> 

                                 <select class="form-control" name="idioma_nivel" value="{{ old('idioma_nivel') }}" required autofocus>
                                   <option selected="selected" value="0">Seleccione nivel min.</option>
                                    <option value="Muy Básico">Muy Básico</option>
                                    <option value="Básico">Básico</option>
                                    <option value="Intermedio">Intermedio</option>
                                    <option value="Avanzado">Avanzado</option>
                                    <option value="Nativo">Nativo</option>

                                  </select>

                                @if ($errors->has('idioma_nivel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idioma_nivel') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
           
    <div class="form-group{{ $errors->has('viajar') ? ' has-error' : '' }}">
                           <label for="viajar" class="text-center">viajar</label>  
                            <div class="col-md-9">
                                <label class="radio-inline"><input type="radio" name="viajar" value="si" id="viajar">Si</label>
                               
                                <label class="radio-inline"><input type="radio" name="viajar" value="no" id="viajar">No</label>

                                @if ($errors->has('viajar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('viajar') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('licencia') ? ' has-error' : '' }}">
                           <label for="licencia" class="text-center">licencia</label>  
                            <div class="col-md-9">
                                
                               
                                <label class="radio-inline"><input type="radio" name="licencia" value="vehiculos" id="licencia">Vehiculos</label>
                                
                                <label class="radio-inline"><input type="radio" name="licencia" value="camiones" id="licencia">Camiones</label>

                                @if ($errors->has('licencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('licencia') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    
     <p>
 <center><button type="submit" class="btn btn-primary btn-block" id="btn-registro-phome">Publicar</button></center>
 </p>
     {!!Form::close()!!} 
      </div>
      
   </div>   
      
      
       @include('includes.Banner')
      
      
      
      
      
      
    
  </nav>
     
       
        
        
        
        
        
        </div>
    
</div>
@endsection
