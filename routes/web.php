<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\User\DashboardController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



// Route Landing Page
Route::get('/', [LandingController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');


// Route Auth
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
});



// Route Dashboard 
// Route::middleware('auth')->group(function () {
Route::prefix('app')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});
// });
