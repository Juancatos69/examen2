<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfumeController;

Route::apiResource('perfumes', PerfumeController::class);

