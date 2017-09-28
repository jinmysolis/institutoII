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
                       <img src="img/panel1.png" alt="" ></a> <div  class="text-center">Ventas</div>
               </li>
                <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/panel2.png" alt="" ></a> <div  class="text-center">Afiliaciones</div>
                </li>
                 <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/panel3.png" alt="" ></a> <div  class="text-center">Mis compras</div>
                 </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/panel4.png" alt="" ></a> <div  class="text-center">Mensaje</div>
                  </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/panel5.png" alt="" ></a> <div  class="text-center">Saldo</div>
                  </li>
              
              
          </ul>
          
          <ul class="ul-menu-panel">
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/panel6.png" alt="" ></a><div  class="text-center">Mis Productos</div>
               </li>
                <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/panel7.png" alt="" ></a> <div  class="text-center">Coproducciones</divt>
                </li>
                 <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/panel8.png" alt="" ></a> <div  class="text-center">Analytics</div>
                 </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/panel9.png" alt="" ></a><div  class="text-center">Recibos</div>
                  </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                          <img src="img/panel10.png" alt="" ></a><div  class="text-center">Reembolsos</div>
                  </li>
              
              
          </ul>
              
         </div>
   
     </div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>


@endsection