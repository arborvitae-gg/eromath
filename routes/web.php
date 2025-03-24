<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

# Homepage
Route::get('/', function () {
    return view('welcome');
});

# Pages
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('show.login');
Route::get('/home', [HomeController::class, 'showHomepage'])->name('show.home');

# Functions
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
