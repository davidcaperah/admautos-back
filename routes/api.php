<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculosController;

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

Route::get('/vehiculos',[VehiculosController::class,'index']);
Route::post('/vehiculos',[VehiculosController::class,'store']);
Route::put('/vehiculos/{id}',[VehiculosController::class,'update']);
Route::Delete('/vehiculos/{id}',[VehiculosController::class,'destroy']);
