<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('empresas', 'EmpresaController');
Route::resource('usuarios', 'UserController');
Route::resource('formaciones', 'FormacionesController');
Route::resource('experienciaLaboral', 'ExperienciasController');
Route::resource('conocimientos', 'OtrosConocminetosController');
Route::get('empresas/empleos/{id}', 'EmpresaController@showEmpleos');
Auth::routes();

Route::get('/home/', 'HomeController@index');
Route::get('/homeEmpresa', 'HomeController@empresa');
Route::get('/homeEmpresa2', 'HomeController@empresa2');
Route::resource('publicarOferta', 'PublicarOfertaController');
Route::resource('empleos', 'EmpleosController');
Route::resource('referidos', 'ReferidosController');

Route::resource('panel', 'PanelController');
Route::resource('menbresia', 'MenbresiaController');
Route::resource('herramientas', 'HerramientasController');
Route::resource('informes', 'InformesController');


//->middleware('ejemplo:Auth::user()->id)')