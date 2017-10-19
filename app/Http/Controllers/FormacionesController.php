<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formacion;
class FormacionesController extends Controller
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
        return view('empleos.createFormacion');
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
     
        $formacion = new Formacion;
        
        $formacion->user_id = $user->id;
        $formacion->centro_educativo_primaria = $request->centro_educativo_primaria;
        $formacion->estado_primaria = $request->estado_primaria;
        $formacion->ano_inicio_primaria = $request->ano_inicio_primaria;
        $formacion->ano_fin_primaria = $request->ano_fin_primaria;
        $formacion->centro_educativo_secundaria = $request->centro_educativo_secundaria;
        $formacion->estado_secundaria = $request->estado_secundaria;
        $formacion->ano_inicio_secundaria = $request->ano_inicio_secundaria;
        $formacion->ano_fin_secundaria = $request->ano_fin_secundaria;
        $formacion->centro_educativo_universidad = $request->centro_educativo_universidad;
        $formacion->estado_universidad = $request->estado_universidad;
        $formacion->ano_inicio_universidad = $request->ano_inicio_universidad;
        $formacion->ano_fin_universidad = $request->ano_fin_universidad;
        
        $formacion->centro_educativo_posgrado = $request->centro_educativo_posgrado;
        $formacion->estado_posgrado = $request->estado_posgrado;
        $formacion->ano_inicio_posgrado = $request->ano_inicio_posgrado;
        $formacion->ano_fin_posgrado = $request->ano_fin_posgrado;
        
       
      
       
        if($formacion->save()){
           
      
            
         return view("empleos.createExperiencias");
        }else{
            return view("empleos.createFormacion");
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
        $formacion = Formacion::where('id',$id)->first();
    
    
        return view('empleos.formaciones',[
          'formacion'=>$formacion,
      ]);
    }
    
    
    public function show2($id)
    {
        $formacion = Formacion::where('id',$id)->first();
    
    
        return view('empleos.formaciones2',[
          'formacion'=>$formacion,
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
