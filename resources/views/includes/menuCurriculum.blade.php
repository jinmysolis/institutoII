 <ul class="ul-show-oferta">
       <a href="{{ url('/formaciones',Auth::user()->id) }}" class="btn btn-success btn-lg">ESTUDIOS</a>
       <a href="{{ url('/experiencia',Auth::user()->id) }}" class="btn btn-success btn-lg">EXPERIENCIAS</a>
       <a href="{{ url('/conocimientos',Auth::user()->id) }}" class="btn btn-success btn-lg">CURSOS</a>
   
    
 </ul>
