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
          
          <div class="dos-columna-menu-panel">
          
          <ul class="ul-menu-panel1">
               <li><a class="btn btn-lg btn-success text-left" href="#">
                       <img src="img/herramientas/herramientas1.png" alt="" ></a> <div  class="text-center text-ul-color">Apis<br>Notificaciones</div>
               </li>
                <li><a class="btn btn-lg btn-success text-left" href="#">
                        <img src="img/herramientas/herramientas2.png" alt="" ></a> <div  class="text-center text-ul-color">Central de <br>Colaboradores</div>
                </li>
                 <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/herramientas/herramientas3.png" alt="" ></a> <div  class="text-center text-ul-color">Central de <br>Checkout</div>
                 </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/herramientas/herramientas4.png" alt="" ></a> <div  class="text-center text-ul-color">Embudo de Ventas</div>
                  </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/herramientas/herramientas5.png" alt="" ></a> <div  class="text-center text-ul-color">Medios<br>de Promocion</div>
                  </li>
                   <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/herramientas/herramientas6.png" alt="" ></a> <div  class="text-center text-ul-color">Pixel de <br>Seguimiento</div>
                  </li>
              
              
          </ul>
          
          <ul class="ul-menu-panel">
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/herramientas/herramientas7.png" alt="" ></a><div  class="text-center text-ul-color">Administrar<br>Comentarios</div>
               </li>
                <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/herramientas/herramientas8.png" alt="" ></a> <div  class="text-center text-ul-color">Checkout<br>Personalizados</divt>
                </li>
                 <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/herramientas/herramientas9.png" alt="" ></a> <div  class="text-center text-ul-color">Widget del<br>Checkout</div>
                 </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/herramientas/herramientas10.png" alt="" ></a><div  class="text-center text-ul-color">Entrega de Bonus</div>
                  </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                          <img src="img/herramientas/herramientas11.png" alt="" ></a><div  class="text-center text-ul-color">Paginas<br>Alternativas</div>
                  </li>
              
              
          </ul>
              
         </div>
   
     </div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>


@endsection