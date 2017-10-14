<nav id="menu-lateral">
   <ul class="ul-lateral nav nav-pills">
          <div class="gente">
         <img src="img/profesional.jpg" alt="">
         </div>
       <li @if(request()->is('panel'))class="active" @endif><a class="btn btn-lg btn-success text-left" href="{{ url('/empleos/create') }}">
               Subir Curriculum</a></li>
       <li @if(request()->is('panel'))class="active" @endif><a class="btn btn-lg btn-success text-left" href="{{ url('/panel') }}">
      Panel<img src="{{ asset('img/menu-lateral27.png') }}" alt="" ></a></li>
      <li><a class="btn btn-lg btn-success text-left" href="#">
      Configuracion<img src="{{ asset('img/menu-lateral1.png') }}" alt="" ></a></li>
      <li @if(request()->is('menbresia'))class="active" @endif><a class="btn btn-lg btn-success text-left" href="{{ url('/menbresia') }}">
      Menbresias<img src="{{ asset('img/menu-lateral2.png') }}" alt="" ></a></li>
      <li><a class="btn btn-lg btn-success text-left" href="#">
      Mercado<img src="{{ asset('img/menu-lateral3.png') }}" alt="" ></a></li>
      <li @if(request()->is('herramientas'))class="active" @endif><a class="btn btn-lg btn-success text-left" href="{{ url('/herramientas') }}">
      Herramientas<img src="{{ asset('img/menu-lateral4.png') }}" alt="" ></a></li>
      <li @if(request()->is('informes'))class="active" @endif><a class="btn btn-lg btn-success text-left" href="{{ url('/informes') }}">
     Informes<img src="{{ asset('img/menu-lateral5.png') }}" alt="" ></a></li>
      <li><a class="btn btn-lg btn-success text-left" href="#">
      Emprendimiento<img src="{{ asset('img/menu-lateral6.png') }}" alt="" ></a></li>
      <li><a class="btn btn-lg btn-success text-left" href="#">
      Certificados<img src="{{ asset('img/menu-lateral12.png') }}" alt="" ></a></li>
      <li><a class="btn btn-lg btn-success text-left" href="#">
     Portafolio<img src="{{ asset('img/menu-lateral13.png') }}" alt="" ></a></li>
     <li><a class="btn btn-lg btn-success text-left" href="#">
     Confianza<img src="{{ asset('img/menu-lateral15.png') }}" alt="" ></a></li>
     <li><a class="btn btn-lg btn-success text-left" href="#">
     Soporte<img src="{{ asset('img/menu-lateral7.png') }}" alt="" ></a></li>
     <li><a class="btn btn-lg btn-success text-left" href="#">
      Galeria<img src="{{ asset('img/menu-lateral18.png') }}" alt="" ></a></li>
      <li><a class="btn btn-lg btn-success text-left" href="#">
     Videos<img src="{{ asset('img/menu-lateral19.png') }}" alt="" ></a></li>
     <li><a class="btn btn-lg btn-success text-left" href="#">
      Biblioteca<img src="{{ asset('img/menu-lateral20.png') }}" alt="" ></a></li>
      <li><a class="btn btn-lg btn-success text-left" href="#">
     Comunidad<img src="{{ asset('img/menu-lateral21.png') }}" alt="" ></a></li>
     <li><a class="btn btn-lg btn-success text-left" href="#">
    Integraciones<img src="{{ asset('img/menu-lateral9.png') }}" alt="" ></a></li>
     <li><a class="btn btn-lg btn-success text-left" href="#">
    Campus virtual<img src="{{ asset('img/menu-lateral22.png') }}" alt="" ></a></li>
    <li><a class="btn btn-lg btn-success text-left" href="#">
     Recursos<img src="{{ asset('img/menu-lateral23.png') }}" alt="" ></a></li>
     <li><a class="btn btn-lg btn-success text-left" href="#">
    Testimonios<img src="{{ asset('img/menu-lateral10.png') }}" alt="" ></a></li>
    <li><a class="btn btn-lg btn-success text-left" href="#">
      Empleos<img src="{{ asset('img/menu-lateral26.png') }}" alt="" ></a></li>
      <li><a class="btn btn-lg btn-success text-left" href="#">
     Visitas<img src="{{ asset('img/menu-lateral29.png') }}" alt="" ></a></li>
      <li><a class="btn btn-lg btn-success text-left" href="#">
    F.A.Q<img src="{{ asset('img/menu-lateral28.png') }}" alt="" ></a></li>
     
     
     
  
      

      </ul>
      
   </nav>

