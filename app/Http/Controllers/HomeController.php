<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Conjuntos(){
        return view('Conjuntos/Conjuntos');
    }
    public function Habilidad_Conjuntos(){
        return view('Conjuntos/Habilidad_Conjuntos');
    }
}
