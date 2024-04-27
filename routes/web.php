<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;


Route::get('/', function () {
    return view('login');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});


Route::get('/download/{filename}', [DownloadController::class, 'download'])->name('download');

