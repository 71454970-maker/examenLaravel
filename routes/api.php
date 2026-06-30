<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductoController;
use App\Http\Controllers\Api\CategoriaController;

Route::apiResource('productos', ProductoController::class);
Route::apiResource('categorias', CategoriaController::class);