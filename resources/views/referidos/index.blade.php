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
          <div class="alert alert-success " role="alert">
             Bienvenidos a la sección referidos
          </div> 
          
              
           
              <h2 class="r-f-c">Empieza a ganar dinero  extra ahora!</h2>
              <h2 class="h2-referido r-f-c">Gane hasta el 20% de comisión.</h2>
              <ol class="ol-referidos">
                  <li><p class="text-justify r-f-c">Todas personas que tengan una cuenta; puede unirse al nuestro programa de referidos y ganar una comisión  que puede llegar al 20% sobre las compras realizadas, como también podrá entrar a integran el plan de carrera.</p></li>
            
                  <li> <p class="r-f-c">Nuestro deseo es recompensarte por referir  a otros e invitarlos a que adquieran nuestros productos.</p></li>
             <li class="r-f-c"> Nos esforzamos por vender productos de alta calidad, porque uno de nuestros objetivos es ahorrar tiempo, dinero y facilitar que cada afiliado que refiera, genere ingresos estables. Sabemos que tiene preguntas, y a continuación, anexamos algunas con sus respuestas.</li>
              </ol>
<div id="accordion" role="tablist">
  <div class="card">
    <div class="card-header" role="tab" id="headingOne">
      <h5 class="mb-0">
        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Qué necesito para ser un afiliado?
        </a>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body text-justify">
       El primer paso para ganar comisiones es la creación de una cuenta y unirse al programa de afiliados; entrar a la oficina virtual y configurar la cuenta  que sólo lleva unos minutos. Después de registrarse en el programa de afiliados, obtendrá un enlace único en referencia a nuevos usuarios. Comparte el enlace en los diferentes contactos o medios sociales, y por cada producto comprado a través de su enlace, usted ganará comisiones de hasta el 20%.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingTwo">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Trabaje duro y logre ganar comisiones, cuando me las pagarán?
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body text-justify">
        Todas las comisiones se pagan los 10 y 25 de cada mes, que corresponden a la quincena anterior, siempre que se cumplan los requisitos de verificación de pagos del cliente que adquirió el producto, que tiene un tiempo límite de 45 días.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ¿Cuánto dinero puedo ganar a través del programa de referidos?
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body text-justify">
          Las tasas de conversión; permiten ganar excelente dinero extra,  sin embargo, existen tres formas de ganar dinero, ilimitado.<br>
        1) Desarrollando sus propios productos.<br>
        2) Refiriendo.<br>
        3) Plan de carrera.

      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree">
         ¿Puedo promocionar mi link de afiliado?
        </a>
      </h5>
    </div>
    <div id="collapseThree2" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body text-justify">
          Si, absolutamente. Puede promoverlo a través de uno o todos sus sitios web, redes sociales, blog, correo electrónico o amigos personalizados. Cuantos más promocione el enlaces o genere contenido que compartes con el enlace, los visitantes más cualificados podrán abrir una cuenta y adquirir un producto que le permite ganar comisiones.

      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
          No tengo una website. ¿Puedo participar en el programa?
        </a>
      </h5>
    </div>
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body text-justify">
         Sí puedes. No necesita una website para promocionar un link de afiliados, existe instrucciones específicas, en los videos que hacen parte de la capacitación para promocionar su link de afiliado.

      </div>
    </div>
  </div>
    
    <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree4" aria-expanded="false" aria-controls="collapseThree">
          ¿Cual es el valor para convertirse en un afiliado activo?
        </a>
      </h5>
    </div>
    <div id="collapseThree4" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body text-justify">
         Ninguno. El registro es gratis y puede construir una red de ventas, para ganar dinero ilimitadamente, además  no existe ningún requisito mínimo de ventas.

      </div>
    </div>
  </div>
    
    <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree5" aria-expanded="false" aria-controls="collapseThree">
         ¿Existe instrucciones para el uso de programa de afiliados?
        </a>
      </h5>
    </div>
    <div id="collapseThree5" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body text-justify">
         Si Al momento de entrar en vigencia el programa de afiliados, se activara el módulo de capacitación para afiliados, que se encargan de referir.

      </div>
    </div>
  </div>
    
    <div class="card">
    <div class="card-header" role="tab" id="headingThree">
      <h5 class="mb-0">
        <a class="collapsed" data-toggle="collapse" href="#collapseThree6" aria-expanded="false" aria-controls="collapseThree">
         ¿Cuándo entra en vigencia el programa de afiliados?
        </a>
      </h5>
    </div>
    <div id="collapseThree6" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body text-justify">
         El programa de afiliados entra a partir del primer día que se haga la presentación oficial de la plataforma, que en principio está programada para el 15 de Noviembre del 2017. 

      </div>
    </div>
  </div>
</div>
     </div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>
@endsection
