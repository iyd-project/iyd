<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\PackageController;

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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Halaman setelah login
Route::get('/home', function () {
    return view('home'); // Halaman user biasa
})->name('home')->middleware('auth');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard'); // Halaman admin
})->name('admin.dashboard')->middleware('auth');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('packages', PackageController::class);
});
