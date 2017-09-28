<?php

namespace App\Http\Controllers;
use App\Http\Requests\EmpleoCreateRequest;
use Illuminate\Http\Request;
use App\Empleo;
class EmpleosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct() {
//        $this->middleware('auth');
//    }










    public function index()
    {
        $empleos = Empleo::all();
        return view('empleos.index',['empleos'=>$empleos]);
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
    public function store(EmpleoCreateRequest $request)
    {
        $empleo = new Empleo;
        
        $empleo->primer_nombre = $request->primer_nombre;
        $empleo->segundo_nombre = $request->segundo_nombre;
        $empleo->apellidos = $request->apellidos;
        $empleo->email = $request->email;
        $empleo->cargo_que_busca = $request->cargo_que_busca;
        $empleo->salario_minimo = $request->salario_minimo;
        $empleo->fecha_nacimiento = $request->fecha_nacimiento;
        $empleo->prefijo_cedula = $request->prefijo_cedula;
        $empleo->cedula_pasaporte = $request->cedula_pasaporte;
        $empleo->rif_nit_iss = $request->rif_nit_iss;
        $empleo->telefono_residencia = $request->telefono_residencia;
        $empleo->prefijo_movil = $request->prefijo_movil;
        $empleo->telefono_movil = $request->telefono_movil;
        $empleo->prefijo_oficina = $request->prefijo_oficina;
        $empleo->telefono_oficina = $request->telefono_oficina;       
        $empleo->pais = $request->pais;
        $empleo->estado = $request->estado;
        $empleo->ciudad = $request->ciudad;
        $empleo->estado_civil = $request->estado_civil;
        $empleo->genero = $request->genero;
        $empleo->profesion = $request->profesion;
       
       
        if($empleo->save()){
          return redirect("/empleos");
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
        //
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
