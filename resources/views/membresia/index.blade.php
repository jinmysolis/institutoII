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
                       <img src="img/menbresia/menbresia1.png" alt="" ></a> <div  class="text-center text-ul-color">Alumno</div>
               </li>
                <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/menbresia/menbresia2.png" alt="" ></a> <div  class="text-center text-ul-color">Profesor</div>
                </li>
                 <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/menbresia/menbresia3.png" alt="" ></a> <div  class="text-center text-ul-color">Mentor</div>
                 </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/menbresia/menbresia4.png" alt="" ></a> <div  class="text-center text-ul-color">Promotor</div>
                  </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/menbresia/menbresia5.png" alt="" ></a> <div  class="text-center text-ul-color">Pionero</div>
                  </li>
              
              
          </ul>
          
          <ul class="ul-menu-panel">
               <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/menbresia/menbresia10.png" alt="" ></a><div  class="text-center text-ul-color">Freelance</div>
               </li>
                <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/menbresia/menbresia9.png" alt="" ></a> <div  class="text-center text-ul-color">Tutor</divt>
                </li>
                 <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/menbresia/menbresia8.png" alt="" ></a> <div  class="text-center text-ul-color">Inversor</div>
                 </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                     <img src="img/menbresia/menbresia7.png" alt="" ></a><div  class="text-center text-ul-color">Socio</div>
                  </li>
                  <li><a class="btn btn-lg btn-success text-left" href="#">
                          <img src="img/menbresia/menbresia6.png" alt="" ></a><div  class="text-center text-ul-color">Afiliados</div>
                  </li>
              
              
          </ul>
              
         </div>
   
     </div>
      
      
      
      
      
      
      
   
  
     @include('includes.banner')     
       
        
        
    </div>    
        
        
        </div>
    
</div>


@endsection