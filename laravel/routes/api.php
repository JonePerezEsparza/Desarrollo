<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\pacientesController;

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


//funcional
Route::get('/v1/pacientes', [pacientesController::class, 'getAll']);

//funcional 
Route::get('/v1/pacientes/{id_pc}', [pacientesController::class, 'getItem']);

//funcional
Route::post('/v1/pacientes/', [pacientesController::class, 'store']);

//funcional
Route::put('/v1/pacientes/{id_pc}', [pacientesController::class, 'update']);
//funcional
Route::patch('/v1/pacientes/{id_pc}', [pacientesController::class, 'patchUpdate']);
//funcional
Route::delete('/v1/pacientes/{id_pc}', [pacientesController::class, 'delete']);