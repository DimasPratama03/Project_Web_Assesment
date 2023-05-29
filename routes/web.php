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
    return redirect('/dashboard');
});

//Route ke  Halaman Admin

Route::middleware(['auth'])->group(function (){
    Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
    Route::get('/admin/admin',[App\Http\Controllers\AdminController::class,'admin'])->name('admin');
    Route::get('/admin/admin/datauser',[App\Http\Controllers\DataUserController::class,'datauser'])->name('datauser');
    Route::get('/admin/admin/laporantes',[App\Http\Controllers\DataResultController::class,'dataresult'])->name('laporantes');
    Route::get('/admin/admin/datakepribadian',[App\Http\Controllers\JenisKepribadianController::class,'index'])->name('datakepribadian');
    Route::get('/admin/admin/datakepribadian/tambah',[App\Http\Controllers\JenisKepribadianController::class,'create'])->name('datakepribadian.tambah');
    Route::post('/admin/admin/datakepribadian/tambah/simpan',[App\Http\Controllers\JenisKepribadianController::class,'store'])->name('datakepribadian.store');
    Route::get('/admin/admin/datakepribadian/show/{jenisKepribadian}',[App\Http\Controllers\JenisKepribadianController::class,'show'])->name('datakepribadian.show');
    Route::get('/admin/admin/datakepribadian/edit/{jenisKepribadian}',[App\Http\Controllers\JenisKepribadianController::class,'edit'])->name('datakepribadian.edit');
    Route::put('/admin/admin/datakepribadian/edit/update/{jenisKepribadian}',[App\Http\Controllers\JenisKepribadianController::class,'update'])->name('datakepribadian.update');
    Route::delete('/admin/admin/datakepribadian/delete/{jenisKepribadian}', [App\Http\Controllers\JenisKepribadianController::class, 'destroy'])->name('datakepribadian.destroy');
    Route::get('/logout',[App\Http\Controllers\SesiController::class,'logout']);
});

//Route ke Halaman User

Route::middleware(['auth'])->group(function (){
    Route::get('/dashboard',[App\Http\Controllers\UsersController::class,'index']);
    Route::get('/dashboard/user',[App\Http\Controllers\UsersController::class,'user'])->middleware('userAkses:user');
    Route::get('/quiz',[App\Http\Controllers\QuizController::class,'index'])->name('quiz.index');
    Route::get('/dashboard',[App\Http\Controllers\UsersController::class,'index'])->name('back.dashboard');
    Route::post('/quiz/submit', [App\Http\Controllers\QuizController::class,'submit'])->name('quiz.submit');
    Route::post('/save-result', [App\Http\Controllers\ResultController::class, 'saveResult']);
    Route::get('/dashboard/user/history',[App\Http\Controllers\UsersController::class,'history'])->name('user.history');
});


