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
}
