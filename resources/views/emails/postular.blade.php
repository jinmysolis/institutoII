<!DOCTYPE html>

<html lang="es">
    <hed>
        <meta charset="UTF-8">
        <title>Mensaje recibido</title>
    </hed>
    
    <body>
        
        
        
       
        
        <h1>hola estos son los datos del postulante al empleo</h1>
        <h1>correo del usuario que se postula: {{$us->email}}</h1>
        <h2>Nombre usuario registrado: {{$us['name']}}</h2>
       
        
        <hr>
        <h1>Informacion personal</h1>
        
        <div class="alert alert-success" role="alert">
        Informacion personal
        </div>
        
        <div class="alert alert-success" role="alert">
       
        @foreach($us->curriculum as $u)
           
            profesion:{{$u->profesion}}<br>
            Segundo nombre: {{$u->segundo_nombre}}<br>
            Zona horaria {{$u->zona_horaria}}<br>
            Idiomas:{{$u->idiomas}}<br>
            Nacionalidad: {{$u->nacionalidad}}<br>
            Estado civil {{$u->estado_civil}}<br>
            Cedula:{{$u->cedula_ciudadania}}<br>
            Licencia: {{$u->licencia}}<br>
            Fecha de nacimiento: {{$u->fecha_nacimiento}}<br>
            Lugar de nacimiento:{{$u->lugar_nacimiento}}<br>
            Pais de residencia: {{$u->pais_residencia}}<br>
            Ciudad{{$u->ciudad}}<br>
            Biografia:{{$u->biografia}}<br>
            Codigo Telefono{{$u->codigo_telefono}}<br>
            Numero detelefono{{$u->telefono}}<br>
            Salario aceptado:{{$u->salario_minimo}}<br>
            Rif-Nit-Iss: {{$u->rif_nit_iss}}<br>
            Genero: {{$u->genero}}<br>
            
            <br><hr>
            <a href="{{ url('/show2',$u->user_id) }}"><h1>Mas informacion</h1> </a>
           <hr>
         @endforeach
         
        </div>
        
        
        

        
    </body>
</html>