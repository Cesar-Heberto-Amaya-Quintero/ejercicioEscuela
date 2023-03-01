<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos', [AlumnosController::class, "index"])->name('alumnos.index');

//Create - Formulario de creación
Route::get('/alumnos/create', [AlumnosController::class, "create"])->name('alumnos.create');
//Store - almacenar un nuevo registro
Route::post('/alumnos', [AlumnosController::class, "store"])->name('alumnos.store');
