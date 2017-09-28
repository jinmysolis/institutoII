@extends('layouts.myapp4')

@section('content')
<h1 class="text-center">Empresas</h1>
<div class="alert alert-success" role="alert">
    index
publicar aqui las vacante requeridas por empresas
</div>
<div class="text-center">
    <button class="btn btn-success">
      Ingenieros <span class="badge badge-secondary">4</span>
    </button>
    <button class="btn btn-success">
      Informatica <span class="badge badge-secondary">7</span>
    </button>
    <button class="btn btn-success">
      Educadores <span class="badge badge-secondary">10</span>
    </button>
    <button class="btn btn-success">
      Licenciados <span class="badge badge-secondary">10</span>
    </button>
    <button class="btn btn-success">
      Doctorados <span class="badge badge-secondary">4</span>
    </button>
    <button class="btn btn-success">
      Contadores<span class="badge badge-secondary">16</span>
    </button>
    <button class="btn btn-success">
     Especialistas <span class="badge badge-secondary">4</span>
    </button>
    <button class="btn btn-success">
      Notifications <span class="badge badge-secondary">4</span>
    </button>
</div>
<br>

<p>
    
    <a href="{{ url('/empresas/create') }}" class="btn btn-primary btn-lg btn-block">Registrate</a>   
    

</p>

@endsection