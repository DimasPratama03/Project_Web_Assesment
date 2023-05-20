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
// Route untuk ke landing Page
Route::get('/', function () {
    return view('LandingPage');
});

//Route Login Admin

Route::middleware(['guest'])->group(function () {
    Route::get('/login',[SesiController::class,'index'])->name('login');
    Route::post('/login',[SesiController::class,'login']);   
});

//Route Login User Dengan Google

Route::get('auth/redirect',[App\Http\Controllers\GoogleController::class,'redirectToGoogle'])->name('google.login');
Route::get('/google/redirect',[App\Http\Controllers\GoogleController::class,'GoogleCallback'])->name('google.callback');

Route::get('/home',function(){
    return redirect('/admin');
});

//Route ke  Halaman Admin

Route::middleware(['auth'])->group(function (){
    Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
    Route::get('/admin/admin',[App\Http\Controllers\AdminController::class,'admin'])->name('admin');
    Route::get('/admin/admin/datauser',[App\Http\Controllers\DataUserController::class,'datauser'])->name('datauser');
    Route::get('/admin/admin/datauser/tambah',[App\Http\Controllers\DataUserController::class,'tambah'])->name('datauser.tambah');
    Route::post('/admin/admin/datauser/tambah/simpan',[App\Http\Controllers\DataUserController::class,'simpan'])->name('datauser.simpan');
    Route::get('/admin/admin/datates',[App\Http\Controllers\DataTesController::class,'datates'])->name('datates');
    Route::get('/admin/admin/datates/tambah',[App\Http\Controllers\DataTesController::class,'tambah'])->name('datates.tambah');
    Route::post('/admin/admin/datates/tambah/simpan',[App\Http\Controllers\DataTesController::class,'simpan'])->name('datates.simpan');
    Route::get('/logout',[App\Http\Controllers\SesiController::class,'logout']);
});

//Route ke Halaman User

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard',[App\Http\Controllers\UsersController::class,'index']);
    Route::get('/dashboard/user',[App\Http\Controllers\UsersController::class,'user'])->middleware('userAkses:user');
    Route::get('/formtes/user',[App\Http\Controllers\FormTesController::class,'index'])->name('formtes');
});


