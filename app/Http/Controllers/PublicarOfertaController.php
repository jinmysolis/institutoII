<?php

namespace App\Http\Controllers;
use App\Pempresa;
use Illuminate\Http\Request;

class PublicarOfertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pempresa = Pempresa::all();
        return view('publicarEmpleos.index',['pempresa'=>$pempresa]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('publicarEmpleos.createOferta') ;
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
     
        $pempresa = new Pempresa;
        $pempresa->user_id = $user->id;
        $pempresa->titulo_oferta = $request->titulo_oferta;
        $pempresa->area = $request->area;
        $pempresa->tipo_jornada = $request->tipo_jornada;
        $pempresa->tipo_contrato = $request->tipo_contrato;
        $pempresa->tareas = $request->tareas;
        $pempresa->salario = $request->salario;
        $pempresa->pais2 = $request->pais2;
        $pempresa->ciudad2 = $request->ciudad2;
        $pempresa->estado2 = $request->estado2;
        $pempresa->anos_experiencia = $request->anos_experiencia;
        $pempresa->edad_minima = $request->edad_minima;
        $pempresa->edad_maxima = $request->edad_maxima;
        $pempresa->estudios_minimos = $request->estudios_minimos;
        $pempresa->idiomas = $request->idiomas;
        $pempresa->idioma_nivel = $request->idioma_nivel;       
        $pempresa->viajar = $request->viajar;
        $pempresa->licencia = $request->licencia;
       
//       if($hasFile){
//           $extension = $request->cover->extension();
//           $empresa->extension =  $extension;
//       }
       
        if($pempresa->save()){
//            if($hasFile){
//                $request->cover->storeAs('images',"$empresa->id.$extension");
//            }
            
            
           $pempresa = Pempresa::all();
          return view('publicarEmpleos.index',['pempresa'=>$pempresa]);
        }else{
            return view("publicarEmpleos.create");
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
