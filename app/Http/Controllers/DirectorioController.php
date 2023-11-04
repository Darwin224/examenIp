<?php

namespace App\Http\Controllers;
use App\Models\Directorio;

use Illuminate\Http\Request;
use App\Models\Contacto;
class DirectorioController extends Controller
{
    public function index (){
        $directorios= Directorio::all();

        return view ('directorio',compact('directorios'));
    }
    public function crear (){
        return view ('crearEntrada');
    }

    public function search (){
        return view ('buscar');
    }

    public function show ($id){

        $directorios= Directorio::find($id);
        $contactos= Contacto::find($id);
        

        return view('vercontactos', compact('directorios', 'contactos'));
    }

    public function delete (){
        return view ('eliminar');
    }

    public function insertar (Request $request){
        $directorios= new Directorio();

        $directorios->codigoEntrada=$request->input('codigo');
        $directorios->nombre=$request->input('nombre');
        $directorios->apellido=$request->input('apellido');
        $directorios->telefono=$request->input('telefono');
        $directorios->correo=$request->input('correo');
        $directorios->save();

        return redirect()->route('directorio.inicio');
    }

    public function buscar($id){

        $correo= Directorio::find($id);



    }



}
