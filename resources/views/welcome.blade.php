@extends('layouts.myapp4')

@section('content')
<nav class="menu-icono-welcome">
      <ul >
            <li>

                  <a class="btn btn-s" href="{{ url('/publicarOferta') }}">
                      <h2 class="text-center" >Empleo</h2><img src="img/menu-icono1.png" alt="">
                  </a>

            </li>
            
            <li>

                  <a class="btn btn-s" href="#">
                      <h2 class="text-center" >Co-working</h2><img src="img/menu-icono2.png" alt="">
                  </a>

            </li>
            <li>

                  <a class="btn btn-s" href="#">
                      <h2 class="text-center" >Net-working</h2><img src="img/menu-icono3.png" alt="">
                  </a>

            </li>
            <li>

                  <a class="btn btn-s" href="#">
                      <h2 class="text-center" >Emprendimiento</h2><img src="img/menu-icono4.png" alt="">
                  </a>

            </li>
            <li>

                  <a class="btn btn-s" href="#">
                      <h2 class="text-center" >Instructores</h2><img src="img/menu-icono5.png" alt="">
                  </a>

            </li>
            <li>

                  <a class="btn btn-s" href="#">
                      <h2 class="text-center" >Alumnos</h2><img src="img/menu-icono6.png" alt="">
                  </a>

            </li>
            <li>

                  <a class="btn btn-s" href="#">
                      <h2 class="text-center" >Radio</h2><img src="img/menu-icono7.png" alt="">
                  </a>

            </li>
            <li>

                  <a class="btn btn-s" href="#">
                      <h2 class="text-center" >Tv Online</h2><img src="img/menu-icono8.png" alt="">
                  </a>

            </li>
       
     
      

      </ul>
  
  </nav>


<div id="welcome-parte-1">
    
    <div class="container">
        <div class="row">
          
            
            
            
            
            
      <div id="formula-welcome">
        <div class="col-md-6 ">
                <br><br>
                <h1 class="text-center h-w">¿Formación, Empleo o Negocios?</h1>
                <h3 class="text-center h-w">Tenemos la respuesta aquí.   ¡Entra!</h3>
                <div id="w-p" class=" text-center">
                <button type="button" class="btn btn-success ">Persona</button>
                <button type="button" class="btn btn-success">Empresa</button>
                </div>
                <br><br>

               <div class="form-group f-w">
                {!!Form::label('name', 'Nombre')!!}
                {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su nombre'])!!}

              </div>
                
                <div class="form-group f-w">
                {!!Form::label('name', 'Email')!!}
                {!!Form::email('email', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su email'])!!}

              </div>
                
                <div class="form-group f-w">
                {!!Form::label('name', 'Ciudad')!!}
                {!!Form::text('ciudad', null,['class'=>'form-control',' placeholder'=>'Por favor introduzca su Ciudad'])!!}

              </div>
            {!!Form::close()!!}
            
             </div>
          </div>   
            
        <div class="col-md-6 text-center"> 
                
                <br><br>
                <img src="img/logo.png" class="logo-wolcome">
            
         </div>
            </div>
    </div>
    </div>
<!--//fin-welcme-parte1////////      -->
    
<div id="division" class="text-center">
           
</div>  



<div id="videos">
    <div class="v-text">
            <div class="v" >
               <video controls>
                    <source src="videos/instituto.ogv" >
                  
                    Tu navegador no implementa el elemento <code>video</code>.
                  </video>
<!--                <video src="videos/instituto.mp4" controls="controls" ></video>-->
                 
            </div>
            
           <div class="mensaje text-center">
               <div class="alert alert-success" role="alert">
                        <h1 class="alert-heading text-left">¡ Entra ahora! La puerta está abierta. </h1>
                        <p class="text-left">El éxito para que cada persona aumente sus ingresos; está ligado a estas tres - 3 - palabras mágicas:</p>
                   <ul class="text-left">
                       <li>1) Negocios</li>
                       <li>2) Habilidades</li>
                       <li>3) Formación</li>
                   </ul>
                   <hr>
                  <p class="mb-0 text-justify">Mientras millones de personas están sonando; nosotros estamos trabajando duro,  para acompañarlo a que se convierta en un triunfador exitoso.  .</p>
                  <button type="button" class="btn btn-success btn-lg " data-toggle="modal" data-target="#myModal">Sigue por favor, Clic Aquí, entra.</button>
              </div>
              
           </div>

    </div>   
   
    <div class="v-text">
            <div class="mensaje text-center btn btn-outline-success">
                 <div class="alert alert-success" role="alert">
                        <h1 class="alert-heading text-left"> ¿Dónde está el Secreto del éxito? </h1>
                        <p class="text-left">Las personas que logran obtener éxito en sus objetivos se han visto<br> obligadas; a desarrollar un método que exige aprendizaje permanente,<br>  trabajo disciplinado, esfuerzo, creatividad e innovación. </p>
                   <ul class="text-left">
                       <li>La pregunta que surge es:   </li>
                        <li>¿Cuál es el método?</li>
                       <li> ¿Tenemos la respuesta en la Plataforma BSTI?</li>
                       <br>
                   </ul>
                   <hr>
                  <button type="button" class="btn btn-success btn-lg " data-toggle="modal" data-target="#myModal">Sigue por favor, Clic Aquí, entra.</button>
                 
              </div>
           </div>
             
            <div class="v" >
               <video controls>
                    <source src="videos/instituto.ogv" >
                  
                    Tu navegador no implementa el elemento <code>video</code>.
                  </video>
<!--               <video src="videos/instituto.mp4" controls="controls"></video>-->
                 
            </div>
    </div>
</div>

<div class="oportunidad text-center">
               
                      <img src="img/oportunidad.png" alt=""  class="img-responsive">  
</div>


            
       


@endsection