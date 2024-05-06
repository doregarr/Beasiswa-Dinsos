<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileViewController;

Route::get('/', function () {
    return view('login');
});
Route::get('/registrasi', function () {
    return view('user.registrasiUser');
});
Route::get('/profile-view', [ProfileViewController::class, 'showProfile'])->name('profile.show');

// Formulir BBP
Route::get('/biodata/data-pribadi', function () {
    return view('user.dataPribadi');
});
Route::get('/biodata/data-keluarga', function () {
    return view('user.dataKeluarga');
});
Route::get('/biodata/profil-akademik', function () {
    return view('user.profilAkademik');
});
Route::get('biodata/file-upload', function () {
    return view('user.file-upload');
});
// End Formulir BBP

Route::get('/download/{filename}', [DownloadController::class, 'download'])->name('download');
Route::get('components/layouts/file-upload', [FileController::class, 'create'])->name('file');
Route::post('components/layouts/file-upload', [FileController::class, 'upload'])->name('file.store');
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/register', [RegisterController::class, 'registration']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/userPage/{id}', [UserController::class, 'showUserPage'])->name('userPage')->middleware('auth');


Route::post('/file-upload', [FileController::class, 'uploadBiodata'])->name('biodata.upload');


Route::get('/admin/registrasi', function () {
    return view('admin.registrasiAdmin');
});
Route::get('/bbp-diajukan', function () {
    return view('Admin.bbpDiajukan');
});
Route::get('/adminPage', [AdminController::class, 'showAdminPage'])->name('adminPage');
