<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    /*public function informacion($nombre, $apellido = null){
        $nombre_completo = strtoupper($nombre . " " . $apellido);

        return view('informacion',compact("nombre")) 
            -> with(["nombre_completo" => $nombre_completo]);
    }*/

    public function informacion(){
        return view('informacion');
    }

    public function contacto(){
        return view('contacto');
    }
}
