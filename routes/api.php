<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

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

Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index']);
Route::post('/todos', [App\Http\Controllers\TodoController::class, 'store']);
Route::patch('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'update']);
Route::patch('/todosCheckAll', [App\Http\Controllers\TodoController::class, 'updateAll']);
Route::delete('/todos/{todo}', [App\Http\Controllers\TodoController::class, 'destroy']);
Route::delete('/todosDeleteCompleted', [App\Http\Controllers\TodoController::class, 'destroyCompleted']);