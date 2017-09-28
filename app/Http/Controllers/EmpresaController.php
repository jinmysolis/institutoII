<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

use App\User;
use App\Http\Requests\EmpresaCreateRequest;
class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $empresas = Empresa::all();
         return view('empresas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasFile =$request->hasFile('cover') && $request->cover->isValid();
        $user= $request->user();
     
        $empresa = new Empresa;
        $empresa->user_id = $user->id;
        $empresa->cover = $request->cover;
        $empresa->informacion_empresa = $request->informacion_empresa;
        $empresa->numero_tributario = $request->numero_tributario;
        $empresa->sitio_web = $request->sitio_web;
        $empresa->lema = $request->lema;
        $empresa->objeto_social = $request->objeto_social;
        $empresa->sector_empresarial = $request->sector_empresarial;
        $empresa->Direccion_postal = $request->Direccion_postal;
        $empresa->ciudad2 = $request->ciudad2;
        $empresa->estado2 = $request->estado2;
        $empresa->codigo_postal = $request->codigo_postal;
        $empresa->pais2 = $request->pais2;
        $empresa->telefono = $request->telefono;
        $empresa->nombre_contacto = $request->nombre_contacto;
        $empresa->cargo = $request->cargo;
        $empresa->autorizacion = $request->autorizacion;       
        $empresa->socio = $request->socio;
        $empresa->representante_legal = $request->representante_legal;
        $empresa->tipo_empresa = $request->tipo_empresa;
       
       if($hasFile){
           $extension = $request->cover->extension();
           $empresa->extension =  $extension;
       }
       
        if($empresa->save()){
            if($hasFile){
                $request->cover->storeAs('images',"$empresa->id.$extension");
            }
            
            
          return view("empresas.home");
        }else{
            return view("empresas.create");
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
