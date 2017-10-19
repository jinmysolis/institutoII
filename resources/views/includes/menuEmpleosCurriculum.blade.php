<div class="alert alert-success" role="alert" id="aler-homeEmpleo">
    <nav class="menu-homeEmpleo ">
        <div class="div-img-ul-homeEmpleo">
             <img src="{{ asset('img/banner_cabecera-01.png') }}" alt="" class="img-ul-homeEmpleo" >
        </div>
        <ul class="ul-homeEmpleo ">
             
           <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="{{ url('/empleos',Auth::user()->id) }}" id="btn-menuEmpleo">
                   <img src="{{ asset('img/menuEmpresaHome1.png') }}" alt="" class="img-menuEmpleo"></a><div >Curriculum</div></li>
           <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="" id="btn-menuEmpleo">
           <img src="{{ asset('img/menuEmpresaHome2.png') }}" alt="" ></a><div >Mis postulaciones</div></li>
            <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="" id="btn-menuEmpleo">
                    <img src="{{ asset('img/menuEmpresaHome3.png') }}" alt="" ></a><div ><div class="text-center">Cursos on line</div></div></li>
           <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="{{ url('/publicarOferta') }}" id="btn-menuEmpleo">
                   <img src="{{ asset('img/menuEmpresaHome4.png') }}" alt="" ></a><div ><div class="text-center">Buscar ofertas</div></div></li>
           <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="" id="btn-menuEmpleo">
           <img src="{{ asset('img/menuEmpresaHome5.png') }}" alt="" ></a><div >Alertas</div></li>
        </ul>
        
    </nav>
</div>
