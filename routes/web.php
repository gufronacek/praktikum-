<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\Auth\LoginController;


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
});

Route::middleware('auth')->group(function () {
    Route::get('/', fn () => view('surat-masuk.dashboard'))->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('surat-masuk', SuratMasukController::class)->only(['index', 'show'])->parameters(['surat-masuk' => 'id']);
    Route::resource('surat-masuk', SuratMasukController::class)->except(['index', 'show'])->parameters(['surat-masuk' => 'id'])->middleware('can:manage-letters');
    Route::resource('surat-keluar', SuratKeluarController::class)->only(['index', 'show'])->parameters(['surat-keluar' => 'id']);
    Route::resource('surat-keluar', SuratKeluarController::class)->except(['index', 'show'])->parameters(['surat-keluar' => 'id'])->middleware('can:manage-letters');
    });
    
    Route::resource('surat-masuk', SuratMasukController::class)->parameters(['surat-masuk' => 'id']);
    Route::resource('surat-keluar', SuratKeluarController::class)->parameters(['surat-keluar' => 'id']);
    
    // // Halaman Dashboard
    // Route::get('/', function () {
    //     return view('welcome');
    // })->name('dashboard');
// Halaman Surat Masuk
// Route::get('/surat-masuk', [SuratMasukController::class, 'index'])
//     ->name('surat-masuk.index');
    
//     // Detail Surat Masuk
//     Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])
//     ->name('surat-masuk.show');



//     Route::get('/surat-keluar', [SuratKeluarController::class, 'index'])
//         ->name('surat-keluar.index');
//     Route::get('/surat-keluar/{id}', [SuratKeluarController::class, 'show'])
//     ->name('surat-keluar.show');

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\SuratMasukController;

// Route::get('/', function () {
//     return view('welcome');
// });

// //route  sederhana
// Route::get('surat-masuk', function () {
//     return view('halaman Surat Masuk');
// });

// //route dengan parameter
// Route::get('surat-masuk/{id}', function ($id) {
//     return 'Detail Surat Masuk dengan ID:' .$id;
//     });
    
//     //name route
//     Route::get('/surat-masuk', function () {
//         return view('halaman Surat Masuk');
//         })->name('surat-masuk.index');
        
        
// Route::get('/surat-masuk/{id}', function ($id) {
//      return 'Detail Surat Masuk dengan ID:' .$id;
// })->name('surat-masuk.show');

// Route::get('/surat-masuk', [SuratMasukController::class, 'index'])->name('surat-masuk.index');
// Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])->name('surat-masuk.show');
