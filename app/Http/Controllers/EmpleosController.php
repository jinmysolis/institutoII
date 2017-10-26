<?php

namespace App\Http\Controllers;
use App\Http\Requests\EmpleoCreateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Empleo;
use App\User;
class EmpleosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }










    public function index()
    {
        $empleos = Empleo::all();
        return view('empleos.index',['empleos'=>$empleos]);
    }
    
    public function todos()
    {
        
        
        $empleos = Empleo::all();
        return view('empleos.todos',['empleos'=>$empleos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('empleos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user= $request->user();
          
        $empleo = new Empleo;
        $empleo->user_id = $user->id;
        $empleo->profesion = $request->profesion;
        $empleo->segundo_nombre = $request->segundo_nombre;
        $empleo->zona_horaria = $request->zona_horaria;
        $empleo->idiomas = $request->idiomas;
        $empleo->nacionalidad = $request->nacionalidad;
        $empleo->estado_civil = $request->estado_civil;
        $empleo->tipo_documento = $request->tipo_documento;
        $empleo->cedula_ciudadania = $request->cedula_ciudadania;
        $empleo->licencia_conducir = $request->licencia_conducir;
        $empleo->fecha_nacimiento = $request->fecha_nacimiento;
        $empleo->lugar_nacimiento= $request->lugar_nacimiento;
        $empleo->pais_residencia = $request->pais_residencia;
        $empleo->ciudad = $request->ciudad;
        $empleo->biografia = $request->biografia;
        $empleo->codigo_telefono = $request->codigo_telefono;
        $empleo->telefono = $request->telefono;
        $empleo->salario_minimo = $request->salario_minimo;
        $empleo->rif_nit_iss = $request->rif_nit_iss;
        $empleo->genero = $request->genero;       
       
       
       
        if($empleo->save()){
        
          return view("empleos.createFormacion");
        }else{
            return view("empleos.create");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Empleo::where('user_id',$id)->first();
        $ur= Auth::user()->id;
//        dd($ur);
        
        
        if($usuario == null)
      {
        return view('empleos.create');
      }
      
      return view('empleos.curriculum')
                        ->with('usuario',$usuario)
                        ->with('ur',$ur)
                      
                        ;
      
      
      


        
        
        
        
//        return view('empleos.empleosshow',[
//          'user'=>$user,
//      ]);
        
        
     
    }
    
    
    
public function show2($id)
    {
        $usuario = User::where('id',$id)->first();
    
//       dd($usuario);
     
      return view('empleos.todosShow',[
          'usuario'=>$usuario,
      ]);
        
        
      
        
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
