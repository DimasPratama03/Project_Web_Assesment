<?php

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
<<<<<<< HEAD
Route::put('/put_user/{id}', [ApiUserController::class, 'update']);
=======
Route::put('/api_user/{id}', [ApiUserController::class, 'updateUser']);
Route::delete('/api_user/{id}', [ApiUserController::class, 'deleteUser']);

>>>>>>> refs/remotes/origin/main
