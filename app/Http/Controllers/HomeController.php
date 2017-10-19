<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function empresa()
    {
        return view('homeEmpresa');
    }
    
    public function empresa2()
    {
        return view('homeEmpresa2');
    }
    
    public function regresar()
    {
        return redirect()->back();
         
    }
}
