<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'attempt'])->name('login.attempt')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/2fa', [TwoFactorController::class, 'index'])->name('2fa')->middleware('guest');
Route::post('/2fa', [TwoFactorController::class, 'attempt'])->name('2fa.attempt')->middleware('guest');


Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'attempt'])->name('register.attempt')->middleware('guest');;
