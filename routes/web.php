<?php

use Illuminate\Support\Facades\Route;

//controlador
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

// Ruta de tipo get
Route::get('cursos', 
    [CursoController::class, 'index']
);

//enrutamiento a una vista
Route::get('cursos/create', 
    [CursoController::class, 'create']
);

//ruta capturar parametros get
Route::get('cursos/{curso}', 
    [CursoController::class, 'show']
);

//ruta capturar parametros get
Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso: $curso, de la categoria: $categoria";
    } else {
        return "Bienvenido al curso: $curso";
    }
});

//controladores
Route::get('controller', 
    HomeController::class
);
