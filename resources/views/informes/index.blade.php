@extends('layouts.myapp4')

@section('content')

    <div class="container-fluid">
    <div class="row">
        
    
@include('includes.menuIconos')  
  
        
 <div class="home-container">
       
        
  
   @include('includes.menuLateral')  
        
        
      <div class="central">
          
          <div class="dos-columna-menu-panel">
          
          <ul class="ul-menu-panel1">
               <li><a class="btn btn-lg btn-success text-left" href="#">
                       <img src="img/informes/informes1.png" alt="" ></a> <div  class="text-center text-ul-color">Auto<br>Facturacion</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                        <img src="img/informes/informes2.png" alt="" ></a> <div  class="text-center text-ul-color">Comisiones<br>Generadas</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes3.png" alt="" ></a> <div  class="text-center text-ul-color">Importes recibidos <br>Como afiliados</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes4.png" alt="" ></a> <div  class="text-center text-ul-color">Ingresos <br>Coproducion</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes5.png" alt="" ></a> <div  class="text-center text-ul-color">Ingresos por <br>Productos detallados</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes6.png" alt="" ></a> <div  class="text-center text-ul-color">Pagos a <br>Afiliados</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                       <img src="img/informes/informes7.png" alt="" ></a> <div  class="text-center text-ul-color">Rendimiento de <br>Afiliados</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                        <img src="img/informes/informes8.png" alt="" ></a> <div  class="text-center text-ul-color">Resumen Anual <br>de Ingresos</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes9.png" alt="" ></a> <div  class="text-center text-ul-color">Suscripciones <br>Canceladas</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes10.png" alt="" ></a> <div  class="text-center text-ul-color">Suscripciones con <br>Atraso en el Pago</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes11.png" alt="" ></a> <div  class="text-center text-ul-color">Hotlinks</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes12.png" alt="" ></a> <div  class="text-center text-ul-color">Ventas por pais</div>
              </li>
              
              
              
          </ul>
              
              
          
          <ul class="ul-menu-panel">
               <li><a class="btn btn-lg btn-success text-left" href="#">
                       <img src="img/informes/informes13.png" alt="" ></a> <div  class="text-center text-ul-color">Clientes<br>&nbsp;</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                        <img src="img/informes/informes14.png" alt="" ></a> <div  class="text-center text-ul-color">Formas de <br>Pagos</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes15.png" alt="" ></a> <div  class="text-center text-ul-color">Ingresos<br>&nbsp;</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes16.png" alt="" ></a> <div  class="text-center text-ul-color">Ingresos por <br>Dispositivos</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes17.png" alt="" ></a> <div  class="text-center text-ul-color">Motivo de la <br>Cancelacion</div>
               </li>
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes18.png" alt="" ></a> <div  class="text-center text-ul-color">Pagos a <br>Afiliados</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                       <img src="img/informes/informes19.png" alt="" ></a> <div  class="text-center text-ul-color">Recuperacion de <br>Compras</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                        <img src="img/informes/informes20.png" alt="" ></a> <div  class="text-center text-ul-color"> Productos <br>Promocionados</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes21.png" alt="" ></a> <div  class="text-center text-ul-color">Satisfaccion <br>de clientes</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes22.png" alt="" ></a> <div  class="text-center text-ul-color">Suscripciones <br>Canceladas <br>Detalles</div>
              </li>
              <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/informes/informes23.png" alt="" ></a> <div  class="text-center text-ul-color">Ventas por Origen</div>
              </li>
              
              
              
              
          </ul>
              
         </div>
   
     </div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>


@endsection