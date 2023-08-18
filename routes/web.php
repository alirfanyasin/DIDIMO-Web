<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\User\DashboardController;
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
});


// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route Dashboard 
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('app/admin')->name('app.admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/admin', function () {
            return "<h1>Ini halaman admin</h1>";
        });
    });
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::prefix('app')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index']);
        Route::get('/user', function () {
            return "<h1>Ini halaman user</h1>";
        });
    });
});
