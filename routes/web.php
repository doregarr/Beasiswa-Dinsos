<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/download/{filename}', [DownloadController::class, 'download'])->name('download');

Route::get('file-upload', [FileController::class, 'create'])->name('file');
Route::post('file-upload', [FileController::class, 'upload'])->name('file.store');