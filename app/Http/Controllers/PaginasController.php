<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function recibeContacto(Request $request){
        //dd($request->all());
        //dd($request->correo);
        DB::table("contactos")->insert([
            "correo" => $request->correo,
            "comentario" => $request->comentario,
            "telefono" => $request->telefono,
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        return redirect()->route("contacto");
    }
}
