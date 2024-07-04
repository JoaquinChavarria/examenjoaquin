<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Models\Directorio;



class ContactoController extends Controller
{
    //
    public function mostrar($id){
        $directorio = Directorio::find($id);
        $contactos = Contacto::all();
        return view('verContactos', compact('directorio', 'contactos'));
    }

    public function create($id){
        $directorio = Directorio::find($id);
        return view('agregarContacto', compact('directorio'));
    }

    public function store(Request $request){
        $contacto = new Contacto();
        $contacto->codigoEntrada= $request->input('codigo');
        $contacto->nombre= $request->input('nombre');
        $contacto->apellido= $request->input('apellido');
        $contacto->telefono= $request->input('telefono');
        
        $contacto->save();
        return redirect()->route('directorio.inicio');
    }

    public function destroy($id){
        $contacto = Contacto::find($id);
        $contacto->delete();
        return redirect()->route('directorio.inicio');
    }
}
