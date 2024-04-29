<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\RegisterController;

Route::get('/download/{filename}', [DownloadController::class, 'download'])->name('download');
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'registration']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('verif');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/index1', [IndexController::class, 'showUserPage'])->name('index1')->middleware('verif');

Route::get('/adminPage', [AdminController::class, 'showAdminPage'])->name('adminPage')->middleware('verif');

