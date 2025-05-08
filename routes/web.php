<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\MusikController;
use Illuminate\Support\Facades\Route;

// Halaman Beranda (Home)
Route::get('/', function () {
    return view('home');
})->name('home');

// Rute untuk login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.custom');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

// Rute untuk registrasi
Route::get('/register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register.custom');
Route::post('/register', [RegisteredUserController::class, 'register'])->name('register.submit');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Dashboard (Hanya bisa diakses jika login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// Profil Pengguna (opsional)
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');

// Rute untuk fitur konsultasi
Route::resource('konsultasi', KonsultasiController::class)->middleware('auth');

// Rute untuk fitur musik (CRUD)
Route::resource('musik', MusikController::class)->middleware('auth');

// Jika perlu override rute resource atau beri nama manual
// Misalnya, untuk mengedit musik atau konsultasi secara spesifik:
Route::get('/musik/create', [MusikController::class, 'create'])->name('musik.create')->middleware('auth');
Route::post('/musik', [MusikController::class, 'store'])->name('musik.store')->middleware('auth');
Route::get('/musik/{id}', [MusikController::class, 'show'])->name('musik.show')->middleware('auth');
Route::get('/musik/{id}/edit', [MusikController::class, 'edit'])->name('musik.edit')->middleware('auth');
Route::put('/musik/{id}', [MusikController::class, 'update'])->name('musik.update')->middleware('auth');
Route::delete('/musik/{id}', [MusikController::class, 'destroy'])->name('musik.destroy')->middleware('auth');
