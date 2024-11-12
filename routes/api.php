<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;

Route::get('/perfumes', [PerfumeController::class, 'index']);       // Para listar todos los perfumes
Route::post('/perfumes', [PerfumeController::class, 'store']);      // Para crear un nuevo perfume
Route::put('/perfumes/{id}', [PerfumeController::class, 'update']); // Para actualizar un perfume por su ID
Route::delete('/perfumes/{id}', [PerfumeController::class, 'destroy']); // Para eliminar un perfume por su ID