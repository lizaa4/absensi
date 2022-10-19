<?php 
 
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\RegisterController; 
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\KirimEmailController;
use App\Http\Controller\LogoutController;

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
Route::get('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
Route::post('/profile/update', [ProfileController::class, 'updateproses'])->name('profile.update.proses');
Route::get('/reset/{id}', [LoginController::class, 'reset'])->name('reset');
Route::post('/reset', [LoginController::class, 'resetProses'])->name('reset.proses');
// route untuk mengalamatkan/ yang mau di akses, slash dipangggil di web, name ditampilkan di view nya, class(update)adalah nama function yang di akses di controller
Route::get('/update', [ProfileController::class, 'update'])->name('update');
Route::post('/update', [ProfileController::class, 'update'])->name('update.proses');
Route::get('/ubah', [LoginController::class, 'ubah'])->name('ubah');
Route::post('/ubah', [LoginController::class, 'ubahProses'])->name('ubah.proses');
Route::post('/absentap/simpan/', [AbsenController::class, 'simpan'])->name('absen.simpan');
Route::post('/password/resets/', [LoginController::class, 'passwordResets'])->name('passwordreset');
Route::get('/password/resets/', [LoginController::class, 'passwordResets'])->name('passwordreset');



Route::post('/kirimPassword', [KirimPasswordController::class, 'kirimPassword'])->name('kirimPassword.proses');

Route::post('/kirimEmail', [KirimEmailController::class, 'kirimEmail'])->name('kirimEmail.proses');
Route::post('/history', [AbsenController::class, 'history'])->name('history.proses');
Route::get('/history', [AbsenController::class, 'history'])->name('history');
Route::post('/absen/simpan', [AbsenController::class, 'simpanAbsen'])->name('simpanAbsen.proses');
Route::get('/absen', [AbsenController::class, 'absen'])->name('absen');
Route::get('/tampilan', [AbsenController::class, 'tampilan'])->name('tampilan');
Route::post('/tampilan', [AbsenController::class, 'tampilan'])->name('tampilan1.proses');
Route::get('logout', [UserController::class, 'logout'])->name('logout');




 





