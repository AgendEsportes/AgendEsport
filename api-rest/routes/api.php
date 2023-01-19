<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::resource('usuario', 'App\Http\Controllers\UsuarioController');

Route::apiResource('usuario', 'App\Http\Controllers\UsuarioController');
Route::apiResource('agendamento', 'App\Http\Controllers\AgendamentoController');
Route::apiResource('espaco', 'App\Http\Controllers\EspacoController');
Route::apiResource('esporte', 'App\Http\Controllers\EsporteController');
Route::apiResource('funcionario', 'App\Http\Controllers\FuncionarioController');