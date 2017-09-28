@extends('layouts.myapp4')

@section('content')

<div class="register" >
    
            
        
    <div class="img-resgiter">
       <img src="img/registro_nueva-01.png" >
    
   </div> 
    <div class="text-right">
    <div  class="form-register ">
         
          <h1 class="text-right">Registro</h1>
          <h5 class="text-right">Ya Tienes cuenta <a href="#">Inicia Ahora</a></h5>
         
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <br> <br> 
                        
                        <div class="text-right"> <label for="name" class="text-center">NOMBRE</label></div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                           
                            <div class="col-md-12">
                              
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                               
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                           
                                </div>
                        </div>
                        
                        
                        <div class="text-right"> <label for="apellidos" >APELLIDO</label></div>
                        <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                           <div class="col-md-12">
                                <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                         <div class="text-right"><label for="email" >USUARIO O CORREO ELECTRONICO</label></div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                             <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                          <div class="text-right"><label for="email-confirm" >CONFIRMAR USUARIO O CORREO ELECTRONICO</label>  </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="email-confirm" type="email" class="form-control" name="email_confirmation" required>
                            </div>
                        </div>
                            
                          <div class="text-right"> <label for="password" >CONTRASEÑA</label></div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                         <div class="col-md-12">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                
                            
                       <div class="text-right"><label for="pais" id="pais">PAIS</label></div>
                        <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
                           
                            <div class="col-md-12">
                                <input id="pais" type="text" class="form-control" name="pais" value="{{ old('pais') }}" required autofocus>

                                @if ($errors->has('pais'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            
                            
                            
                            
                            
                             <div class="text-center" id="label-empresa-personal">{!!Form::label('tipoCuenta', 'TIPO DE CUENTA')!!}</div>
                            
                            
                           <div id="empresa-personal"class="text-center">
                                     <img src="img/registro-empresa.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                     <img src="img/registro-persona.png">
                                <br>
                            <label class="radio-inline"><input type="radio" name="tipoCuenta" value="empresa" id="tipoCuenta">Empresa</label>
                            <label class="radio-inline"><input type="radio" name="tipoCuenta" value="personal" id="tipoCuenta">Personal</label>
                            
                            </div>
                            
                            
                       
                             <div id="reg">  
                        <div class="form-group text-center">
                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-success">
                                    Register
                                </button>
                            </div>
                            
                        </div>
                                 </div> 
                              
                         

                    </form>
        </div>
           
    </div>
    
    
</div>   
    



@endsection
