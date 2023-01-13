<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Models\Imagen;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
       
        //En elocuent latest sirve para traer los registro ordenados por created_at
        //En elocuent take es usado para limitar el resultado
        //En elocuent chunk en cambio parte el collection en pequeños arrays para posterior recorrerlos uno a uno, asi:take es usado para limitar el resultado

        $eventos = Publicacion::latest()->with('imagen')->where('id_tipo_publicacion', 2)->get();
        $noticias = Publicacion::latest()->with('imagen')->where('id_tipo_publicacion', 1)->get();
        
        return view('home',[
            'eventos'=>$eventos,
            'noticias'=>$noticias,
        ]); 
    }
}
