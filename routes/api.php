<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;

Route::get('/perfumes', [PerfumeController::class, 'index']);      
Route::post('/perfumes', [PerfumeController::class, 'store']);      
Route::put('/perfumes/{id}', [PerfumeController::class, 'update']); 
Route::delete('/perfumes/{id}', [PerfumeController::class, 'destroy']); 