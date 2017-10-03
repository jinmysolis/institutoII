<div class="alert alert-success" role="alert" id="aler-homeEmpleo">
    <nav class="menu-homeEmpleo ">
        <div class="div-img-ul-homeEmpleo">
             <img src="{{ asset('img/banner_cabecera-01.png') }}" alt="" class="img-ul-homeEmpleo" >
        </div>
        <ul class="ul-homeEmpleo ">
             
           <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="#" id="btn-menuEmpleo">
                   <img src="{{ asset('img/menuEmpresaHome1.png') }}" alt="" class="img-menuEmpleo"></a><div >Inicio</div></li>
           <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="#" id="btn-menuEmpleo">
           <img src="{{ asset('img/menuEmpresaHome2.png') }}" alt="" ></a><div >Mis vacantes</div></li>
            <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="{{ url('/empresas/create') }}" id="btn-menuEmpleo">
                    <img src="{{ asset('img/menuEmpresaHome3.png') }}" alt="" ></a><div ><div class="text-center">Registrar empresa</div></div></li>
           <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="#" id="btn-menuEmpleo">
                   <img src="{{ asset('img/menuEmpresaHome4.png') }}" alt="" ></a><div ><div class="text-center">Buscar candidatos</div></div></li>
           <li class="li-menu-homeEmpleo"><a class="btn btn-lg btn-success text-left" href="{{ url('/empresas',Auth::user()->id) }}" id="btn-menuEmpleo">
           <img src="{{ asset('img/menuEmpresaHome5.png') }}" alt="" ></a><div >Cuenta</div></li>
        </ul>
        
    </nav>
</div>
