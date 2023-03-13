<?php

namespace App\Http\Controllers;
use App\Models\Alumno;
use App\Models\Carrera;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        $argumentos['alumnos'] = $alumnos;
        return view("alumnos.index", $argumentos);
    }

    public function create() {
        $carreras = Carrera::all();
        $argumentos = array();
        $argumentos['carreras'] = $carreras;
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

    public function delete($id) {
        $alumno = Alumno::find($id);

        $argumentos = array();
        $argumentos['alumno'] = $alumno;

        return view('alumnos.delete', $argumentos); 
    }

    public function destroy(Request $request, $id) {
        $alumno = Alumno::find($id);
        $feedback = "Se elimino correctamente a: " . $alumno->nombre;
        $alumno->delete();
        return redirect()->route('alumnos.index')->with('exito', $feedback);
    }

    public function prueba() {
        return view('prueba'); 
    }
}
