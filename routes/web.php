<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController; // Importa el controlador aquí


Route::get('/', function () {
    return view('welcome');
});

Route::resource('personas', PersonasController::class);
