<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directorio;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function agregar($id){
        
        $directorios= Directorio::find($id);


        return view('agregarcontacto', compact('directorios'));
    }

    public function guardar (Request $request){
        $contactos= new Contacto();

        $contactos->codigoEntrada=$request->input('codigo');
        $contactos->nommbre=$request->input('nombre');
        $contactos->apellido=$request->input('apellido');
        $contactos->telefono=$request->input('telefono');
        $contactos->save();

        return redirect()->route('directorio.inicio');
    }

}
