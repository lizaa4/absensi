<?php 
 
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\RegisterController; 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PostController; 

Route::get('/dashboard', function () { 
    return view('index'); 
}); 

Route::resource('posts', PostController::class)->middleware('auth'); 
Route::get('/login', [LoginController::class, 'index'])->name('login'); 
Route::post('/login', [LoginController::class, 'login'])->name('login.proses'); 
Route::get('/register', [RegisterController::class, 'index'])->name('register'); 
Route::post('/register', [RegisterController::class, 'register'])->name('register.proses'); 
Route::post('/logout', [PostController::class, 'logout'])->name('logout.proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); 
// Route::post('/login', [LoginController::class, 'login'])->name('login.proses')->middleware('guest'); 
//Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); 
 
//route index register 
//Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index']); 
 
//route store register 
//Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'store']);