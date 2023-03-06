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

    public function edit($id) {
        $alumno = Alumno::find($id);
        $argumentos['alumno'] = $alumno;
        return view('alumnos.edit', $argumentos);
    }

    public function update(Request $request, $id) {
        $alumno = Alumno::find($id);
        if($alumno) {

            $alumno->nombre = $request->input('nombre');
            $alumno->save();
            return redirect()->route('alumnos.edit', $id)->with('exito', "Se actualizo el alumno exitosamente");
        }

        return redirect()->route('alumnos.index')->with('error', "No se encontró alumno $id");
        
    }
}
