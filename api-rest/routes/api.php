<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataEspacos;
use App\Http\Controllers\DataEsportes;
use App\Http\Controllers\AuthController;


Route::apiResource([
    'espacos' => DataEspacosController::class,
]);
Route::get('espacos', [DataEspacosController::class, 'espacos']);

Route::apiResource('esportes', DataEsportesController::class);
Route::get('esportes', [DataEsportesController::class, 'esportes']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('user', [AuthController::class, 'user']);

