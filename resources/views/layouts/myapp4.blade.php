<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="{{asset('/css/font-awesome.min.css')}}">
   <link href="{{url('/css/app.css')}}" rel="stylesheet">
   <link rel="stylesheet" type="" href="{{url('css/normalize.css')}}">
   <link  rel = "apple-touch-icon"  size = "57x57"  href = "img/apple-icon-57x57.png" > 
<link  rel = "apple-touch-icon"  size = "60x60"  href = "img/apple -icon-60x60.png" > 
<link  rel = "apple-touch-icon"  tamaños = " 72x72 " href = " img/apple-icon-72x72.png" > 
<link  rel = "" apple-touch-icon  tamaños = "76x76"  href = "img/apple-icon-76x76.png" > 
<link  rel = "apple-touch-icon  "size = " 114x114 "  href = " img/apple-icon-114x114.png "> 
<link  rel = "apple-touch-icon"  size = "120x120"  href = "img/apple-icon-120x120.png" > 
<link  rel = "apple-touch-icon  " size = "144x144"  href = "img/ apple-icono-144x144.png" > 
<link  rel = "apple-touch-icon"  tamaños = "152x152"  href = "img/apple-icon-152x152.png" > 
<link  rel = "apple-touch-icon"  tamaños = "180x180"  href = "img/apple-icon-180x180.png" > 
<link  rel = "icon" type  = "image / png  " size = "192x192"  href = "img/android-icon-192x192.png" > 
<link  rel = "icono"  type = "image / png"  tamaños = "32x32"  href = "img/favicon-32x32.png" > 
<link  rel = "icono"  type = "image / png"  tamaños = "96x96"  href = "img/favicon-96x96.png" > 
<link  rel = "icono"  type = "image / png"  tamaños = "16x16"  href = "img/ favicon-16x16. png " > 
<link  rel = " manifest " href = "img/manifest.json" > 
<meta  name ="msapplication-TileColor"  content = "#ffffff" > 
<meta  name = "msapplication-TileImage"  content = "img/ms-icon-144x144.png" > 
<meta  name = "theme-color"  content = "#ffffff" >
   
   
</head>
<body>

        <div class="header">
                <div class="header-parte1">
                   <img src="{{ asset('img/banner_cabecera-01.png') }}" alt="" class="img-barnne" >
                    
                   
                

                   
                   
                   
                   
                     <nav class="nav-barnne">
                           @if (Auth::guest())
                       <ul class="ul-barnne">
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Registro</a></li>
                            <li><a href="#">Contacto</a></li>
                            <li><a href="#">Ayuda</a></li>
                           
                       </ul>
           
                       <div class="redes-barnne">
                           
                                 
                           <a href="#" class="a-redes-barnne"><img src="{{ asset('img/icono1.png') }}" alt="" class="ico-redes-barnne"></a>
                           <a href="#" class="a-redes-barnne"><img src="{{ asset('img/icono2.png') }}" alt="" class="ico-redes-barnne"></a>
                           <a href="#" class="a-redes-barnne"><img src="{{ asset('img/icono3.png') }}" alt="" class="ico-redes-barnne"></a>
                           <a href="#" class="a-redes-barnne"><img src="{{ asset('img/icono4.png') }}" alt="" class="ico-redes-barnne"></a>
                           <a href="#" class="a-redes-barnne"><img src="{{ asset('img/icono5.png') }}" alt="" class="ico-redes-barnne"></a>
                           <a href="#" class="a-redes-barnne"><img src="{{ asset('img/icono6.png') }}" alt="" class="ico-redes-barnne"></a>
           
           
           
           
                       </div>
                           @else
                      <div id="salir">
                             <h1>{{ Auth::user()->name }} </h1>
                                 <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Cerrar session
                                        </a>
                                       <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> </div>
                            
                        @endif    
                     </nav>
                 </div>
                 
                 
                 
                 
        </div>


   <div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>

	</div>	
	
<header>
		<nav >

				<ul >
							<li ><a href="#" class="li-header">Inico</a></li>
							<li><a href="#" class="li-header">Instituto</a></li>
							<li><a href="#" class="li-header">Servicios</a></li>
							<li><a href="#" class="li-header">Programas</a></li>
                                                        <li><a href="#" class="li-header">Admision</a></li>
                                                        <li><a href="#" class="li-header">Certificados</a></li>
                                                        <li><a href="#" class="li-header">Noticias</a></li>
                                                        <li><a href="#" class="li-header">Comunidad</a></li>
                                                        <li><a href="#" class="li-header">Eventos</a></li>
							<li><a href="#" class="li-header">Campus virtual</a></li>
                            <li><a href="#" class="li-header">Soporte</a></li>
							
							
							
				</ul>
		</nav>
</header>


    
            <section>
                @if( session('success'))       
 
     
                <h2>{{ session('success') }}</h2>


               @endif
              
                @yield('content')

            </section>

   

<footer>
        <nav class="nav-menu-footer">
                <ul class="ul-nav-menu-footer">
                            <li><a href="#" class="a-nav-menu-footer">Copyright 2017</a></li>
                            <li><a href="#" class="a-nav-menu-footer">Business Skills Training Institute</a></li>
                            <li><a href="#" class="a-nav-menu-footer">Todos los derechos reservados</a></li>
                            <li><a href="#" class="a-nav-menu-footer">Politicas de privacidad y Terminos dee uso</a></li>
                            <li><a href="#" class="a-nav-menu-footer">Referidos</a></li>
                            <li><a href="#" class="a-nav-menu-footer">Contactos</a></li>
                        
            
                </ul>
             </nav>
 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/menu.js"></script>
</footer>

</body>
</html>