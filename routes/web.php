<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::redirect('/', '/register');

// Rutas para el flujo de registro
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
