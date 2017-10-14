<?php

namespace App\Http\Controllers;
use App\Experiencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class ExperienciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('empleos.createExperiencias');
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
          
       $experiencia = new Experiencia;
       
        $experiencia->user_id = $user->id;
        $experiencia->nombre_empresa = $request->nombre_empresa;
        $experiencia->actividad_empresa = $request->actividad_empresa;
        $experiencia->puesto = $request->puesto;
        $experiencia->nivel_experiencia = $request->nivel_experiencia;
        $experiencia->pais = $request->pais;
        $experiencia->ano_inicio_trabajo = $request->ano_inicio_trabajo;
        $experiencia->ano_fin_trabajo = $request->ano_fin_trabajo;
        $experiencia->descripcion_puesto = $request->descripcion_puesto;
           
       
       
       
        if($experiencia->save()){
        
          return redirect('experienciaLaboral/create')->with('info','Si desea agregar mas experiencia pulse registrar sino pulse siguiente');
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
