<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TwoFactorController;
use App\Http\Middleware\VerifyEncryptedId;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'attempt'])->name('login.attempt')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/2fa/{id}', [TwoFactorController::class, 'index'])->name('2fa')->middleware(['guest', VerifyEncryptedId::class]);
Route::post('/2fa/{id}', [TwoFactorController::class, 'attempt'])->name('2fa.attempt')->middleware(['guest', VerifyEncryptedId::class]);


Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'attempt'])->name('register.attempt')->middleware('guest');;
