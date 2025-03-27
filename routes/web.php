<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExamController;
use Illuminate\Support\Facades\Route;

# Homepage
Route::get('/', function () {
    return view('welcome');
});

# Pages
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('show.login');

Route::get('/home', [HomeController::class, 'showHomepage'])->name('show.home');

Route::get('/create', [ExamController::class, 'showCreateQuestionForm'])->name('show.create');

# Functions
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/create', [ExamController::class, 'createQuestion'])->name('createQuestion');