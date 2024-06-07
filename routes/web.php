<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Hai, Saya Miatul Nabila siap belajar Laravel 11";
});

Route::get('/profil', function () {
    return view('profil');
});

// routes/web.php
Route::get('/about', function () {
    $data = [
        'nama' => 'Miatul Nabilla',
        'nim' => '0110223239',
        'program_studi' => 'Teknik Informatika',
        'tahun_angkatan' => '2023'
    ];
    return view('about', $data);
});


Route::get('/admin', [AdminController::class, 'index']);

Route::get('/pasien/show', [PasienController::class, 'show'])->name('pasien.show');