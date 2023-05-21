<?php

use App\Http\Controllers\ApiResultTestController;
use App\Http\Controllers\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api_user', [ApiUserController::class, 'getAll']);
Route::get('/api_user/{id}', [ApiUserController::class, 'getUser']);
Route::post('/api_user', [ApiUserController::class, 'CreateUser']);
Route::put('/api_user/{id}', [ApiUserController::class, 'updateUser']);
Route::delete('/api_user/{id}', [ApiUserController::class, 'deleteUser']);

// get Api Result Test
Route::get('/api_result_test', [ApiResultTestController::class, 'getAll']);
Route::get('/api_result_test/{id}', [ApiResultTestController::class, 'getResultTest']);
Route::post('/api_result_test', [ApiResultTestController::class, 'createResultTest']);
// Route::put('/api_result_test', [ApiResultTestController::class, 'getAll']);
Route::delete('/api_result_test/{id}', [ApiResultTestController::class, 'deleteResultTest']);