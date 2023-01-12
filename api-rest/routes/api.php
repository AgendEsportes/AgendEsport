<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\DataEspacos;
Route::controller('espacos', [DataEspacosController::class, 'index']);

use App\Http\Controllers\DataEsportes;
Route::controller('esportes', [DataEsportesController::class, 'store']);