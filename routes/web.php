<?php 
 
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\RegisterController; 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\KirimEmailController;

Route::get('/', function () { 
    return view('welcome'); 
    // return redirect()->to('/login');
});




Route::get('/login', [LoginController::class, 'index'])->name('login'); 
Route::post('/login', [LoginController::class, 'login'])->name('login.proses');
Route::get('/register', [RegisterController::class, 'index'])->name('register'); 
Route::post('/register', [RegisterController::class, 'register'])->name('register.proses');
Route::post('/forgot', [LoginController::class, 'forgot'])->name('forgot.proses');
Route::get('/forgot', [LoginController::class, 'forgot'])->name('forgot');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/reset', [LoginController::class, 'reset'])->name('reset');
Route::post('/reset', [LoginController::class, 'reset'])->name('reset.proses');
Route::get('/update', [RegisterController::class, 'update'])->name('update');
Route::post('/update', [RegisterController::class, 'update'])->name('update.proses');
Route::get('/ubah', [LoginController::class, 'ubah'])->name('ubah');
Route::post('/ubah', [LoginController::class, 'ubah'])->name('ubah.proses');
Route::get('/absen', [AbsenController::class, 'absen'])->name('absen');
Route::post('/kirimEmail', [KirimEmailController::class, 'index'])->name('kirimEmail.proses');
Route::get('/tabel', [ProfileController::class, 'index'])->name('tabel');
Route::post('/tabel', [ProfileController::class, 'tabel'])->name('tabel.proses');
