<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\IndexController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('login');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
Route::get('/biodata', function () {
    return view('components.layouts.file-upload');
});

Route::get('/download/{filename}', [DownloadController::class, 'download'])->name('download');
Route::get('components/layouts/file-upload', [FileController::class, 'create'])->name('file');
Route::post('components/layouts/file-upload', [FileController::class, 'upload'])->name('file.store');
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'registration']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('verif');

