<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Directorio;

class DirectorioController extends Controller
{
    //
    public function index(){
        $directorio = Directorio::all();
        return view('directorio', compact('directorio'));
    }

    public function create(){
        return view('crearEntrada');
    }

    public function store(Request $request){
        $directorio = new Directorio();
        $directorio->codigoEntrada= $request->input('codigo');
        $directorio->nombre= $request->input('nombre');
        $directorio->apellido= $request->input('apellido');
        $directorio->telefono= $request->input('telefono');
        $directorio->correo= $request->input('correo');

        $directorio->save();
        return redirect()->route('directorio.inicio');
    }

    public function buscar(){
        return view('buscar');
    }

    public function search(Request $request){
        $correo = $request->input('correo');
        $directorio = Directorio::where('correo', $correo)->get();
        return redirect()->route('contacto.mostrar', $directorio->codigoEntrada);
    }
    

    public function destroy($id){
        $directorio = Directorio::find($id);
        $contactos = Directorio::where('codigoEntrada', $id)->get();
        foreach($contactos as $contacto){
            $contacto->delete();
        }
        $directorio->delete();

    }
}