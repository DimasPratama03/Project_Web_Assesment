<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use App\Http\Middleware\UserAkses;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('LandingPage');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login',[SesiController::class,'index'])->name('login');
    Route::post('/login',[SesiController::class,'login']);   
});

Route::get('auth/redirect',[App\Http\Controllers\GoogleController::class,'redirectToGoogle'])->name('google.login');
Route::get('/google/redirect',[App\Http\Controllers\GoogleController::class,'GoogleCallback'])->name('google.callback');

Route::get('/home',function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function (){
    Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
    Route::get('/admin/admin',[App\Http\Controllers\AdminController::class,'admin'])->middleware('userAkses:admin');
    Route::get('/logout',[App\Http\Controllers\SesiController::class,'logout']);
});

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard',[App\Http\Controllers\UsersController::class,'index']);
    Route::get('/dashboard/user',[App\Http\Controllers\UsersController::class,'user'])->middleware('userAkses:user');
});

