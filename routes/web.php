<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('show.login');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('show.register');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');

