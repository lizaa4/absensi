<?php 
 
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\RegisterController; 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PostController; 

Route::get('/', function () { 
    // return view('welcome'); 
    return redirect()->to('/login');
});


Route::get('/login', [LoginController::class, 'index'])->name('login'); 
Route::post('/login', [LoginController::class, 'login'])->name('login.proses');
Route::get('/register', [RegisterController::class, 'index'])->name('register'); 
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/forgot', [LoginController::class, 'forgot'])->name('forgot.proses');
Route::get('/forgot', [LoginController::class, 'forgot'])->name('forgot');
Route::get('/reset', [LoginController::class, 'reset'])->name('reset');
Route::post('/reset', [LoginController::class, 'reset'])->name('reset.proses');
