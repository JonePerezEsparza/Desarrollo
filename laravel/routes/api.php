<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ClientesController;

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
Route::get('/v1/clientes', [ClientesController::class, 'getAll']);

//funcional 
Route::get('/v1/clientes/{id}', [clientesController::class, 'getItem']);

//funcional
Route::post('/v1/clientes', [clientesController::class, 'store']);


//falta
Route::put('/v1/clientes/{id}', [clientesController::class, 'updatePut']);
//falta
Route::patch('/v1/clientes/{id}', [clientesController::class, 'updatePatch']);
//falta
Route::delete('/v1/clientes´/{id}', [clientesController::class, 'getAll']);