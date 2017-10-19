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
    @if( session()->has('info'))       
 
     <div class="alert alert-warning" role="alert">
      {{ session('info') }}
     </div>
     
    

     @endif
          
          
 <div class="alert alert-success" role="alert">
       Experiencia laboral
 </div>
          <p>
            <div class="text-right">
                <button class="btn btn-success ">
                  Total: experiencias <span class="badge badge-secondary">0</span>
                  <span class="sr-only">unread messages</span>
                </button>
          </div>
          </p>
     {!!Form::open(['url'=>'/experienciaLaboral','method'=>'POST'])!!}
      <form  role="form" method="POST" action="{{ url('/experienciaLaboral') }}">
           {{ csrf_field() }}
     
              
             
           
    <div class="form-group{{ $errors->has('nombre_empresa') ? ' has-error' : '' }}">
                           <label for="nombre_empresa" class="text-center">Nombre de la empresa</label>  
                            <div class="col-md-9">
                                <input id="nombre_empresa" type="text" class="form-control" name="nombre_empresa" value="{{ old('nombre_empresa') }}" required autofocus>

                                @if ($errors->has('nombre_empresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre_empresa') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
           
<div class="form-group{{ $errors->has('actividad_empresa') ? ' has-error' : '' }}">
                           <label for="actividad_empresa" class="text-center">Actividad de la empresa</label>  
                            <div class="col-md-9">
                                <select class="form-control" name="actividad_empresa" value="{{ old('actividad_empresa') }}" required autofocus>
							                     <option id="sel_ind" selected="" disabled="">Seleccionar</option>
									              <option id="AFJP">AFJP</option>
									             <option id="Agro-Industrial">Agro-Industrial</option>
									             <option id="Agropecuaria">Agropecuaria</option>
									             <option id="Alimenticia">Alimenticia</option>
									             <option id="Arquitectura">Arquitectura</option>
									             <option id="Artesanal">Artesanal</option>
							                             <option id="Automotriz">Automotriz</option>
									             <option id="Aérea">Aérea</option>
									             <option id="Banca / Financiera">Banca / Financiera</option>
									             <option id="Biotecnología">Biotecnología</option>
									             <option id="Comercio">Comercio</option>
									             <option id="Comercio Exterior">Comercio Exterior</option>
									             <option id="Construcción">Construcción</option>
									             <option id="Consultoría">Consultoría</option>
									             <option id="Consumo masivo">Consumo masivo</option>
									             <option id="Correo">Correo</option>
									             <option id="Defensa">Defensa</option>
									             <option id="Diseño">Diseño</option>
									             <option id="Editorial">Editorial</option>
									             <option id="Educación">Educación</option>
									             <option id="Energía">Energía</option>
									             <option id="Entretenimiento">Entretenimiento</option>
									             <option id="Farmacéutica">Farmacéutica</option>
									             <option id="Financiera">Financiera</option>
									             <option id="Forestal">Forestal</option>
									             <option id="Ganadería">Ganadería</option>
									             <option id="Gastronomía">Gastronomía</option>
									             <option id="Gobierno">Gobierno</option>
									             <option id="Higiene y Perfumería">Higiene y Perfumería</option>
									             <option id="Holding">Holding</option>
									             <option id="Hotelería">Hotelería</option>
									             <option id="Imprenta">Imprenta</option>
									             <option id="Información e Investigación">Información e Investigación</option>
									             <option id="Informática / Tecnología">Informática / Tecnología</option>
									             <option id="Inmobiliaria">Inmobiliaria</option>
									             <option id="Internet">Internet</option>
									             <option id="Jurídica">Jurídica</option>
									             <option id="Laboratorio">Laboratorio</option>
									             <option id="Manufactura">Manufactura</option>
									             <option id="Medios">Medios</option>
									             <option id="Minería / Petróleo / Gas">Minería / Petróleo / Gas</option>
									             <option id="ONGs">ONGs</option>
									             <option id="Otra">Otra</option>
									             <option id="Papelera">Papelera</option>
									             <option id="Pesca">Pesca</option>
									             <option id="Petroquímica">Petroquímica</option>
									             <option id="Plásticos">Plásticos</option>
									             <option id="Publicidad / Marketing / RRPP">Publicidad / Marketing / RRPP</option>
									             <option id="Química">Química</option>
									             <option id="Retail">Retail</option>
									             <option id="Salud">Salud</option>
									             <option id="Seguros">Seguros</option>
									             <option id="Servicios">Servicios</option>
									             <option id="Siderurgia">Siderurgia</option>
									             <option id="Supermercado / Hipermercado">Supermercado / Hipermercado</option>
									             <option id="Tabacalera">Tabacalera</option>
									             <option id="Telecomunicaciones">Telecomunicaciones</option>
									             <option id="Textil">Textil</option>
									             <option id="Transportadora">Transportadora</option>
									             <option id="Transporte">Transporte</option>
									             <option id="Turismo">Turismo</option>
									             
							                 </select>

                                @if ($errors->has('actividad_empresa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('actividad_empresa') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
           
           
   <div class="form-group{{ $errors->has('puesto') ? ' has-error' : '' }}">
                           <label for="puesto" class="text-center">Puesto</label>  
                            <div class="col-md-9">
                                <input id="puesto" type="text" class="form-control" name="puesto" value="{{ old('puesto') }}" required autofocus>

                                @if ($errors->has('puesto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('puesto') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>        
           
           
           
           
           
           
 <div class="form-group{{ $errors->has('nivel_experiencia') ? ' has-error' : '' }}">
                           <label for="nivel_experiencia" class="text-center">Nivel de experiencia</label>  
                            <div class="col-md-9">
                                <select class="form-control" name="nivel_experiencia" value="{{ old('nivel_experiencia') }}" required autofocus>
					<option id="sel_nivel_exp" disabled="" selected="">Seleccionar</option>
				        <option id="Aprendiz">Aprendiz</option>
				        <option id="Junior">Junior</option>
				        <option id="SemiSenior">SemiSenior</option>
				        <option id="Senior">Senior</option>
                                    
			       </select>

                                @if ($errors->has('nivel_experiencia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nivel_experiencia') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>  
           
           
<div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                           <label for="pais" class="text-center">Pais</label>  
                            <div class="col-md-9">
                                <select class="form-control" name="pais" value="{{ old('pais') }}" required autofocus>
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

                                @if ($errors->has('pais'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>       
           
           
           
              
     <div class="form-group{{ $errors->has('ano_inicio_trabajo') ? ' has-error' : '' }}">
                           <label for="ano_inicio_trabajo" class="text-center">Desde</label>  
                            <div class="col-md-9">
                                <input id="ano_inicio_trabajo" type="date" class="form-control" name="ano_inicio_trabajo" value="{{ old('ano_inicio_trabajo') }}" required autofocus>

                                @if ($errors->has('ano_inicio_trabajo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_inicio_trabajo') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           
    <div class="form-group{{ $errors->has('ano_fin_trabajo') ? ' has-error' : '' }}">
                           <label for="ano_fin_trabajo" class="text-center">Hasta</label>  
                            <div class="col-md-9">
                                <input id="ano_fin_trabajo" type="date" class="form-control" name="ano_fin_trabajo" value="{{ old('ano_fin_trabajo') }}" required autofocus>

                                @if ($errors->has('ano_fin_trabajo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ano_fin_trabajo') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
     
     
     <div class="form-group{{ $errors->has('descripcion_puesto') ? ' has-error' : '' }}">
                           
                            <div class="col-md-9">
                                 <label for="descripcion_puesto" class="text-center">Descripcion de responsabilidades</label> 
                                
                             <textarea rows="4" cols="50" id="descripcion_puesto" type="text" class="form-control" name="descripcion_puesto" value="{{ old('descripcion_puesto') }}" required autofocus>
                                
                                </textarea>
                                @if ($errors->has('descripcion_puesto'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('descripcion_puesto') }}</strong>
                                    </span>
                                @endif
                            </div>
    </div>
           <hr>
           


							                     
									              
							                 
							               
     
 
  
  <p>
  <center><button type="submit" class="btn btn-primary btn-lg">Registrar</button>
      <a href="{{ url('/conocimientos/create') }}" class="btn btn-primary btn-lg">seguir</a>
 
 </p>
     {!!Form::close()!!} 
      </div>
   
</div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>
@endsection


                  
                  
                
        
                 
               
             
               
             
             
             
              
              
