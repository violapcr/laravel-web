<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;

Route::post('question/store', [QuestionController::class, 'store'])
    ->name('question.store');

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route PCR
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

// Route Mahasiswa
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

// Route nama
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

// Route NIM
Route::get('/nim/{param1?}', function ($param1 = 'Tidak ada NIM') {
    return 'NIM saya: ' . $param1;
});

// Route Mahasiswa Controller
Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

// Route About
Route::get('/about', function () {
    return view('halaman-about');
});

// Route Matakuliah - akses dengan kode
Route::get('/matakuliah/show/{kode?}', function ($kode = null) {
    if ($kode) {
        return 'Anda mengakses matakuliah ' . $kode;
    }

    return 'Masukkan kode matakuliah!';
});

// Resource Controller Matakuliah
Route::resource('/matakuliah', MatakuliahController::class);

// Route Home Controller
Route::get('/home', [HomeController::class, 'index']);

// Route Submit Data
Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', [MahasiswaController::class, 'submit']);
