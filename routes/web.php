<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/registrasi', function () {
    return view('registrasi');
});

Route::get('/biodata', function () {
    return view('Biodata.biodata');
});



Route::get('/download/{filename}', [DownloadController::class, 'download'])->name('download');

