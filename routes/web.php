<?php 
 
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\RegisterController; 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PostController; 

Route::get('/', function () { 
    return view('register'); 
});
Route::get('/login', [LoginController::class, 'index'])->name('login'); 
Route::post('/login', [LoginController::class, 'login'])->name('login.proses'); 
Route::get('/register', [RegisterController::class, 'index'])->name('register'); 
Route::post('/register', [RegisterController::class, 'register'])->name('register.proses'); 
Route::post('/logout', [PostController::class, 'logout'])->name('logout.proses');
