<?php

namespace App\Http\Controllers;
use App\Models\Alumno;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        $argumentos['alumnos'] = $alumnos;
        return view("alumnos.index", $argumentos);
    }

    public function create() {
        $argumentos = array();
        return view('alumnos.create', $argumentos);
    }

    public function store(Request $request) {
        $nuevoAlumno = new Alumno();
        $nuevoAlumno->nombre = $request->input('nombre');
        
        $nuevoAlumno->save();
        return redirect()->route('alumnos.index');
    }
}
