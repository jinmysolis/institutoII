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


<div class="welcome-parte-1">
    
     <div class="mensaje2 text-justify img-thumbnail">
               <div class="alert alert-success" role="alert">
                    <h1 class="alert-heading text-center">Presentación </h1>
                       <p>
                       El mundo está globalizado y la tecnología,  cómo el internet genera una evolución instantánea que influye en más de 2 mil millones de personas que están conectadas a la red.</p> 
                       <p>En los próximos 20 años, más 5 mil millones de personas tienen acceso a internet y los cambios en las sociedades modernas las vuelven más exigentes.</p>

                       <p>Hoy el mundo exige más expertos que hablemos menos y hagamos más.</p>
                       <p> Tú donde quiere estar en la próxima década?</p>
                       <div class="text-right">
                       <button type="button" class="btn btn-success btn-lg " data-toggle="modal" data-target="#myModal">Leer mas</button>
                        </div>
                       <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Qué es BSTI?</h4>
      </div>
      <div class="modal-body">
        <p>BSTI; es una plataforma online de educación informal y no formal, que busca convertirse en soporte de gestión de empleo, emprendimiento y desarrollo empresarial, que no reemplaza todas las formas legales de educación formal establecidas en cada país por la ley..</p>
        <p>El Instituto; ofrece entrenamiento técnico, financiero, académico y administrativo en las diferentes áreas del saber, a través de talleres, seminarios, congresos, simposios,  cursos de formación, conferencias, y acontecimientos especiales de carácter educativo, todo orientado hacia el desarrollo empresarial y personal.</p>
        <p>Es importante resaltar que la plataforma siempre va a mantener contenido creciente de valor; donde mostraremos  entrevistas, informes de sueldos y beneficios, cursos actualizados, ofertas de empleo, networking, además, mantendremos un programa de radio y televisión online, buscando compartir vivencias de nuestros sponsor, asociados o alumnos, porque nuestra meta al 2025, es llegar a un mínimo de 10 millones de ciudadanos que hablan español en el mundo, dentro de una población de 200 millones de oportunidades que están conectadas a internet día a día, y al finalizar el 2020, tener disponible la plataforma en su  aplicación móvil iOS y Androide, en perfecto funcionamiento.</p>
       
        
  <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Metas a mediano plazo.1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
          
          <ul>   
              <li>1) Hacer la presentación formal de la plataforma online en octubre del 2017 e iniciar su relanzamiento en Noviembre del 2017.</li>

<li>2) Hacer el lanzamiento oficial el 1 de febrero del 2018, a nivel global.</li>

<li>3) Inaugurar oficinas comerciales en Colombia, Perú, Venezuela, Ecuador, México, Panamá, Chile, Argentina y Estados Unidos -USA- antes del 2019.</li>
.</ul> 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        No hay necesidad de buscar en ningún otro lugar. </a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Con más de 8 millones de puestos de trabajo, ZipRecruiter es el único sitio que necesitará para encontrar su próximo trabajo..</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Sedes</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">BSTI, mantiene su sede principal en Vancouver, British Columbia, Canadá y  se constituye en septiembre del 2017..</div>
    </div>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

              </div>
              
     </div> 
            
    <div class="video-logo"> 
                  <video controls>
                    <source src="videos/instituto.ogv" >
                  
                    Tu navegador no implementa el elemento <code>video</code>.
                  </video>
        
                   
                
<!--               <video src="videos/instituto.mp4" controls="controls" ></video>-->
            
       </div>
</div>
    
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
                  <button type="button" class="btn btn-outline-success">Sigue por favor, Clic Aquí, entra.</button>
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
                 
                  <button type="button" class="btn btn-outline-success">Sigue por favor, Clic Aquí, entra.</button>
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