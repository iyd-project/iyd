<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/', [LandingPageController::class, 'index']);

Route::get('/pricelist', function () {
    return view('pricelist');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/pricelist-login', function () {
    return view('pricelist-login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('packages', PackageController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('gallery', [GalleryController::class, 'index'])->name('gallery.index');
    Route::post('gallery', [GalleryController::class, 'store'])->name('gallery.store');
    Route::patch('/admin/gallery/{gallery}', [GalleryController::class, 'update'])->name('admin.gallery.update');
    Route::delete('gallery/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
    Route::resource('aboutus', \App\Http\Controllers\Admin\AboutUsController::class)->except(['create', 'show']);
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('packages', PackageController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/admin/reservations', function () {
    return view('admin.reservations.index');
})->name('reservations.index');

Route::get('/admin/gallery', function () {
    return view('admin.gallery.index');
})->name('gallery.index');

Route::get('/admin/gallery', [GalleryController::class, 'index'])->name('admin.gallery.index');
Route::post('/admin/galleries', [GalleryController::class, 'store'])->name('admin.gallery.store');

Route::patch('/admin/gallery/{gallery}', [GalleryController::class, 'update'])->name('admin.gallery.update');
