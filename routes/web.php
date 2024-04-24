<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});
use App\Http\Controllers\DownloadController;

Route::get('/download/{filename}', [DownloadController::class, 'download'])->name('download');

