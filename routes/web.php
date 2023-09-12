<?php

use App\Http\Controllers\Admin\ArtikelController as AdminArtikelController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\KonsultasiController as AdminKonsultasiController;
use App\Http\Controllers\Admin\PasienController as AdminPasienController;
use App\Http\Controllers\API\Mail\ForgotPasswordController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\ForgotPassword;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PeriksaController;
use App\Http\Controllers\User\RiwayatController;
use Illuminate\Support\Facades\Route;

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




// Route Auth
Route::middleware('guest')->group(function () {
    // Route Landing Page
    Route::get('/', [LandingController::class, 'index']);
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::Post('/register', [RegisterController::class, 'register'])->name('register');
    Route::get('/forgot-password', [ForgotPassword::class, 'index'])->name('forgot_password');

    Route::post('/send-email-forgot-password', [ForgotPasswordController::class, 'index'])->name('send_email.forgot_password');
    Route::get('/update-password/{any}', [ForgotPasswordController::class, 'update_password']);
});


// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route Dashboard 
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('app/admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index']);
        Route::get('/pasien', [AdminPasienController::class, 'index']);
        Route::get('/artikel', [AdminArtikelController::class, 'index']);
        Route::post('artikel/store', [AdminArtikelController::class, 'store'])->name('artikel.store');
        Route::get('artikel/{id}/delete', [AdminArtikelController::class, 'destroy'])->name('artikel.destroy');
        Route::get('artikel/{id}/edit', [AdminArtikelController::class, 'edit'])->name('artikel.edit');
        Route::put('artikel/{id}/update', [AdminArtikelController::class, 'update'])->name('artikel.update');
        Route::get('/konsultasi', [AdminKonsultasiController::class, 'index']);
    });
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::prefix('app')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/checkup', [PeriksaController::class, 'step_checkup']);
        Route::post('/checkup/start', [PeriksaController::class, 'start']);
        Route::get('/checkup/index', [PeriksaController::class, 'index']);
        Route::post('/checkup/cancel/{id}', [PeriksaController::class, 'cancel']);
        Route::post('/checkup/reset/{id}', [PeriksaController::class, 'reset']);
        Route::get('/history', [RiwayatController::class, 'index']);
    });
});
